<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\pro;
use App\Models\Cart;
use App\Models\Order;


class show extends Controller
{
    function display(){

        
        $kd = pro::all();
        return view ('index',['data'=>$kd]);
    }

    function detail($id)
    {
        $data = pro::find($id);
        return view ('detail',['product'=>$data]);
    }

    function addtocart(Request $req){

        
            $cart = new Cart;
            // $cart -> users_id = $req->session()->get('users')['id'];
            $cart -> product_id = $req->product_id;
            $cart->save();
            return back()->with('success','Product added to cart');
           

       
    }

    function cartList()
    {
        $data = DB::table('cart')
        ->join('pros','cart.product_id','pros.id')
        ->select('pros.*','cart.id as cart_id') 
        ->get();

        return view ('cart',['cartdata'=>$data]);

        
    }

    function removeItem($id){

        Cart::destroy($id);
        return redirect('/cart');
    }

    function orderNow()
    {
        $Total = DB::table('cart')
        ->join('pros','cart.product_id','pros.id')
        ->sum('pros.price');

        return view ('ordernow',['total'=>$Total]);

    }

    
    function placeOrder(Request $req)
    {
        $cart = Cart::all();
        foreach($cart as $crt){
            $order = new Order;
            $order->product_id = $crt['product_id'];
            $order->address = $req->address;
            $order->status = "Pending";
            $order->payment_method = $req->payment;
            $order->payment_status = "Pending";
            $order->save();
        }

        Cart::destroy($cart);
        return redirect('/');
       
    }

    function myOrder()
    {
        // $productId = pro::all();
        $orders = DB::table('orders')
        ->join('pros','orders.product_id','pros.id')
        // ->where('orders.product_id',$productId)
        ->get();


        return view ('myorder',['orders'=>$orders]);
    }
}