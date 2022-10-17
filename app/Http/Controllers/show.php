<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\pro;
use App\Models\Cart;


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
}
