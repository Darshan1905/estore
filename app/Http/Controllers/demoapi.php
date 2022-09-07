<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demoapi extends Controller
{
    function getdata()
    {
        return ["name"=>"Kirit","artist"=>"Kirit","price"=>2999];
    }
}
