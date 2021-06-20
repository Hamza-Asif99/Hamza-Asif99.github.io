<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigationController extends Controller
{
    //
    public function index(){

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
