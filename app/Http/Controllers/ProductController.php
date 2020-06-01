<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Categorie;
class ProductController extends Controller
{
    // public function getProduct(){
    // 	$list_product = Product::get();
    // 	return view('baitap.list_product',compact('list_product'));
    // }
    // public function getAddProduct(){
    // 	$list_category = Categorie::get();
    // 	return view('baitap.add_product',compact('list_category'));
    // }
    // public function getSaveProduct(Request $request){
    // 	$product = new Product;
    // 	$product->id = $request->id;
    // 	$product->name = $request->name;
    // 	$product->quantity = $request->quantity;
    // 	$product->category_id = $request->category_id;
    // 	$product->save();
    // 	return redirect()->route('list-product');
    // }
    // public function getDeleteProduct($id){
    // 	$list_product = Product::destroy($id);
    // 	return redirect()->route('list-product');
    // }
    // public function getEditProduct($id){
    // 	$list_product = Product::where('id',$id)->first();
    // 	$list_category = Categorie::get();
    // 	return view('baitap.edit_product',compact('list_category','list_product'));
    // }
    // public function getUpdateProduct(Request $request){
    // 	$product = Product::find($request->id);
    // 	$product->name = $request->name;
    // 	$product->quantity = $request->quantity;
    // 	$product->category_id = $request->category_id;
    // 	$product->save();
    // 	return redirect()->route('list-product');
    // }
    // public function getProductOfCate($id){
    //     $list_product = Product::where('category_id',$id)->get();
    //     return view('baitap.list_product',compact('list_product'));
    // }

    public function index()
    {
        $products = Product::all();
        return view('baitap.list_product', compact('products'));
    }
    public function create()
    {
        $categories= Categorie::all();
        return view('baitap.add_product', compact('categories'));
    }
    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect()->route('list-product');
    }
    public function edit($id)
    {
        $product= Product::find($id);
        $categories = Categorie::all();
        return view('baitap.edit_product', compact('product', 'categories'));
        
    }
    public function update(Request $request, $id)
    {
        $product= Product::find($id);
        $product->update($request->all());
        return redirect()->route('list-product');
    }
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('list-product');
    }
    public function getListProductByCateID($id){
        $products = Product::where('category_id',$id)->get();
        return view('baitap.list_product', compact('products'));
    }



}
