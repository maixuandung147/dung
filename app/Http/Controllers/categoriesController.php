<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categories;

class categoriesController extends Controller
{
    public function index(){
    	$categories = categories::get();
    	return view('baitap.list_category',compact('categories'));
    }
}
