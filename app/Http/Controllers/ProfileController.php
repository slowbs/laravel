<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller {
    public function getIndex(){
    header('content-type:text/html; charset=utf-8');
    $profile = Profile::get();
    return view('test',compact('profile'));
    }
}