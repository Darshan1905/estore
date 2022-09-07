<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pro;


class papi extends Controller
{
    function addpost(Request $req)
    {

        $file=$req->file('image');
        $name=$file->getClientOriginalName();
        $img = $file->storeAs('public/uploads/',$name);
        $data = new pro;
        // $data->id=$req->id;
        $data->name=$req->name;
        $data->artist=$req->artist;
        $data->price=$req->price;
        $data->image=$img;
        $result=$data->save(); 

        if($result)
        {
            return["result"=>"data is save"];
        }
        else{
            return["result"=>"data in not save"];
        }
    }

  
}
