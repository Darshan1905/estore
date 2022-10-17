<?php

namespace App\Http\Controllers;
use App\Models\pro;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $kd = pro::all();
        return view ('index',['data'=>$kd]);
        // return view('home');
    }

}
