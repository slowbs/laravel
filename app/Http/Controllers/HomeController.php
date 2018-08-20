<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = Auth::user()->role->name;
        if($role == "Admin"){
            $users = DB::table('roles')->get();
        }
        else{
            $users = DB::table('users')->get();
        }
        return view("$role/welcome", ['users' => $users]);
        /* return view(Auth::user()->role->name); */
        /* return view('home'); */
    }
}
