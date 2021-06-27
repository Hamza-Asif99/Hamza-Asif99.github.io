<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class SearchController extends Controller
{
    public function search(Request $request){
        $searchItem = Item::where('title','LIKE','%'.$request->input('title').'%')->get();
        return view('search')->with('items',$searchItem);
        // return view('search');
    }
}
