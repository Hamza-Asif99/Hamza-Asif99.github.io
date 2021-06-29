<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Session;
class NavigationController extends Controller
{
    //
    public function loggingOut(){
        // Session::flush();
        return view("loggingout");
    }
    public function index(){
        // Session::flush();

            return view("index");
    }
    public function item(){

            return view("item");
    }
    public function categories(){

            return view("categories");
    }
    public function shoppingCart(){
            return view( "shoppingCart");
    }
    public function wishList(){

            return view("wishList");
    }
    public function helpDesk(){

            return view("helpDesk");
    }
    
}
