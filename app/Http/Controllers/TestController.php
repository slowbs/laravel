<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\test;

class TestController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = test::where('id','1')->get();
        return view('test',compact('profile'));
    }
}
