<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class SlowController extends Controller
{
    public function index()
    {
        $profile = Profile::get();
        return view('test',compact('profile'));
    }
}
