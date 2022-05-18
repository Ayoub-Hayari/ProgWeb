<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Auth;
use App\User;
class HomeController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $usertype=Auth::user()->role_id;
        if($usertype=='1')
        {
            return view('admin.login');
        }
        else
        {
            $news=Product::take(2)->get();
            $products=Product::orderBy('id', 'DESC')->take(8)->get();
    
            return view('home',[
                'product'=>$products,
                'news'=>$news
            ]);
        }
       
    }
    public function orders()
    {
        $user=auth()->user();
        return view('orders',[
            'orders'=>$user->orders
        ]);
    }
    public function contact()
    {
        return view('contact');
    }
   

   
    
}
