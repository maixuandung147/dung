<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;

class CategorieController extends Controller
{
    // public function getListCate(){
    // 	$list_category=Categorie::get();
    // 	return view('baitap.list_category',compact('list_category'));
    // }
    public function index()
    {
        $categories = Categorie::all();
        return view('baitap.list_category', compact('categories'));
    }
    

}
