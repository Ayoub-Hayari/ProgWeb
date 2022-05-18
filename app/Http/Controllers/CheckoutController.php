<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderProduct;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
     /*
     gerer le paiement
     */
    public function __construct()
    {
        $this->middleware('auth') ;
    }
    public function checkout()
    {
        return view('checkout');
    }
    /*
     paiement reussi
     */
    public function success()
    {
        if(!session()->has('success'))
       {
           return redirect()->route('home');
        }
        $order=Order::latest()->first();
        //$orderProducts=OrderProduct::where('order_id',$order->id)->get();
        Cart::destroy();
        return view('success',[
            "order"=>$order
            //"products"=>$orderProducts

        ]);
    }
    public function store(Request $request)
    {
        // Set your secret key. Remember to switch to your live secret key in production.
    // See your keys here: https://dashboard.stripe.com/apikeys
    // Set your secret key. Remember to switch to your live secret key in production.
// See your keys here: https://dashboard.stripe.com/apikeys
//\Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

// Token is created using Stripe Checkout or Elements!
// Get the payment token ID submitted by the form:
/*$token = $_POST['stripeToken'];
$charge = \Stripe\Charge::create([
  'amount' =>Cart::total(),
  'currency' => 'eur',
  'description' => 'Mon paiement',
  'source' => $token,
  'receipt_email' =>$request->email,
                'metadata' =>[
                    'ouwner'=>$request->name,
                    'products'=>Cart::content()->toJson()
                ]
            ]);
*/

            /*\Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            $token = $request->get('stripeToken');
            $charge = \Stripe\Charge::create([
                'amount' => Cart::total(),
                'currency' => 'eur',
                'description' => 'Mon paiement',
                'source' => $request->stripeToken,
                'receipt_email' =>$request->email,
                'metadata' =>[
                    'ouwner'=>$request->name,
                    'products'=>Cart::content()->toJson()
                ]
            ]);*/
        //\Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        \Stripe\Stripe::setApiKey('sk_test_51KzVEkKiP54OWV790tLyj5L0F2grDc92jlxCASzh3OVywiDphZnKUBHVzTjXFUEbE3aaWGJ3xMefJxUvsxfetZTI00toHTZ8h5');

                                  /*  try{
                                        $token = $request->get('stripeToken');
                                        $charge = \Stripe\Subscription::create([
                                            'amount' => Cart::total(),
                                            'currency' => 'eur',
                                            'description' => 'Mon paiement',
                                            'source' => $request->stripeToken,
                                            'receipt_email' =>$request->email,
                                            'metadata' =>[
                                                'ouwner'=>$request->name,
                                                'products'=>Cart::content()->toJson()
                                            ]
                                        ]);
                                    }
                                        catch(\Stripe\Exception\CardErrorException $e){
                                            throw $e;
                                        }*/
           /* $charge= \ Stripe\Subscription::create([
                'amount' =>Cart::total(),
                'currency' =>'eur',
                'description' =>'Mon paiement',
                'source' =>$request->stripeToken,
                'receipt_email' =>$request->email,
                'metadata' =>[
                    'ouwner'=>$request->name,
                    'products'=>Cart::content()->toJson()
                ]
            ]);
            
        }
        catch(\Stripe\Exception\CardErrorException $e){
            throw $e;
        }*/


        /*$metadata = [];
        foreach(Cart::content() as $item) {
            array_push($metadata, $item->model->name);
        }
 
        $myString = implode("", $metadata);
 
 */
        try {
            $charge = \Stripe\Charge::create([
                'amount' => Cart::total()*100,
                'currency'=>'eur',
                'description'=>'Mon paiement',
                'source'=>$request->stripeToken,
                'receipt_email'=>$request->email,
                'metadata' =>[
                    'ouwner'=>$request->name,
                    'products'=>Cart::content()->toJson()
                ]
            ]);
            $order = Order::create([
                'user_id'=> auth()->user()->id,
                'paiement_firstname'=>$request->firstname,
                'paiement_name'=>$request->name,
                'paiement_phone'=>$request->phone,
                'paiement_email'=>$request->email,
                'paiement_adress'=>$request->adress,
                'paiement_city'=>$request->city,
                'paiement_postalcode'=>$request->postalcode,
                'paiement_total'=>Cart::total()
            ]);
            foreach(Cart::content() as $product) {
                OrderProduct::create([
                    'order_id'=>$order->id,
                    'product_id' => $product->id,
                    'quantity' => $product->qty,
                ]);

            }
            return redirect()->route('checkout.success')->with('success', 'Paiement has been accepted');
        }
        catch(\Stripe\Exception\CardException $e){
            throw $e;
        }
        
    }
    /**
 * Stripe
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  \App\Models\Order  $order
 * @return array
 */
/*
protected function stripe($data, $request, $order)
{
    if($request->session()->has($order->reference)) {
        $data['secret'] = $request->session()->get($order->reference);
    } else {            
        \Stripe\Stripe::setApiKey(config('stripe.secret_key'));
        $intent = \Stripe\PaymentIntent::create([
            'amount' => (integer) ($order->totalOrder * 100),
            'currency' => 'EUR',
            'metadata' => [
              'reference' => $order->reference,
            ],
        ]);
        $request->session()->put($order->reference, $intent->client_secret);
        $data['secret'] =  $intent->client_secret;
    };
    
    return $data;
}
protected function data($request, $order)
{

    if($order->state->slug === 'carte' || $order->state->slug === 'erreur') {
        $data = $this->stripe($data, $request, $order);
    }  
    
    return $data;
}
*/

}

