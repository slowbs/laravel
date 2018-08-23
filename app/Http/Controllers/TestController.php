<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Role;


class TestController extends Controller {
    public function getIndex(){
    header('content-type:text/html; charset=utf-8');
    $profile = Role::get();
    return $profile ? 'Model Profile Connect Yes!' : 'Error! Model Profile Connect False!!!';
    }
   }