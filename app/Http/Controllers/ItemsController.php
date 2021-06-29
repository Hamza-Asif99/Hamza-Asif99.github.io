<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
// use Session;
class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('items.index');
    }

    public function admin(){
        $Items = Item::orderBy('created_at','desc')->get();   ///eloquent ORM being used to select all table data
        return view("admin")->with('items',$Items);
    }

    public function category($cat){
        $Items = Item::where('category',$cat)->get();
        return view("categories")->with('items',$Items);
    }

    public function itemDisplay($itemid){
        $Items = Item::where('id',$itemid)->get();
        // print $item[0]->id;
        return view("item")->with('items',$Items);
    }

    public function homeItems(){
        $Items = Item::where('category','default')->get();
 
            return view("index")->with('items',$Items);
     
    }

    public function item(){
        return view("item");
    }

    public function xmlhttprequest(){
        $searchTerm =request('search');
        if(strlen($searchTerm)>0){
            $searchResults = DB::select(DB::raw("select title from items where title like '$searchTerm%'"));
            return response($searchResults);

         
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $item = new Item;
        $item->title = $request->input('title');
        $item->price = $request->input('price');
        $item->image = $request->input('image');
        $item->desc = $request->input('desc');
        $item->category = $request->input('category');
        $item->quantity = $request->input('quantity');

        $item->save();

        return redirect('/admin');
        
    }
    public function toUpdate($id){
        $Items = Item::where('id',$id)->get();
        $Items[0]->delete();


        return view("items.updateItem")->with('items',$Items);
    }

    // public function updateItem(Request $request, $id){
    //     $item = Item::where('id',$id)->get();
    //     $item->title = $request->input('title');
    //     $item->price = $request->input('price');
    //     $item->image = $request->input('image');
    //     $item->desc = $request->input('desc');
    //     $item->category = $request->input('category');
    //     $item->quantity = $request->input('quantity');

    //     $item->save();

    //     return redirect('/admin');
    // }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::where('id',$id)->get();
        $item[0]->delete();
        return redirect('/admin');
    }
}
