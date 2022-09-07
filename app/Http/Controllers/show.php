<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Http;
use App\Models\pro;


class show extends Controller
{
    function display(){

        // $dis = DB::select("select * from pros");
        // return view('demofetch');
        $kd = pro::all();

        return view ('demofetch',['data'=>$kd]);

    }
}
