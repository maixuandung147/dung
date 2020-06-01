<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\articles;
use App\categories;


class articlesController extends Controller
{
    public function index(){
    	$articless = articles::get();
    	return view('baitap.list_articles',compact('articless'));
    }
    public function destroy($id)
    {
        articles::destroy($id);
        return redirect()->route('list-articless');
    }
    public function create()
    {
        $categories= categories::all();
        return view('baitap.add_articless', compact('categories'));
    }
    public function store(Request $request)
    {
        articles::create($request->all());
        return redirect()->route('list-articless');
    }
     public function edit($id)
    {
        $articless= articles::find($id);
        $categories = categories::all();
        return view('baitap.edit_articless', compact('articless', 'categories'));
        
    }
    public function update(Request $request, $id)
    {
        $articless= articles::find($id);
        $articless->update($request->all());
        return redirect()->route('list-articless');
    }
    public function getListArticlesByCateID($id){
        $articless = articles::where('category_id',$id)->get();
        return view('baitap.list_articles', compact('articless'));
    }
}
