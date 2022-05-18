<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('cart');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cart::add($request->id, $request->name, 1, $request->price)->associate('App\Product');
       /* $product =Product::findOrFail($request->id);
        Cart::add([
            'id'=>$product->id,
            'name'=>$product->name, 
            'quantity'=>1,
            'price'=>$product->price
             ]);*/
        return redirect()->route('cart.index')->with('success', 'Produit ajouté à votre panier!');

    }/*
    public function store(Request $request){
        $product=Product::findOrFail($request->id);
        $cartItems= Cart::add([
             'id' => $product->id,
             'name' => $product->name,
             'quantity'=>1,
             'price' => $product->price,
        ]);
        Cart::associate($cartItems->rowId, 'App\Product');
        return redirect()->route('cart.index')->with('success', 'Produit ajouté à votre panier!');                                                          
    }*/
    
    
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return back()->with('success', 'Le produit a étéretire de votre panier!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reset()
    {
        Cart::destroy();
    }
}
