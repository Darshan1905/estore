<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class postapi extends Controller
{
    function add(Request $req)
    {   
        $file=$req->file('image');
        $name=$file->getClientOriginalName();
        $img = $file->storeAs('product',$name);
        // $data = new products;
        // $data->id=$req->id;
        // $data->name=$req->name;
        // $data->artist=$req->artist;
        // $data->price=$req->price;
        // $result=$data->save(); 

        // if($result)
        // {
            // return["result"=>"data is save"];
            return["result"=>"data is save"];
        // }
        // else{
            // return["result"=>"data in not save"];
        // }
    }
}
