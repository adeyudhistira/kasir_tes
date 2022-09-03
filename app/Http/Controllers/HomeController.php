<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       return view('master.master')->nest('child', 'home');
       
    }

}
