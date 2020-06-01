<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//BAI THI
Route::get('articless', 'articlesController@index')->name('list-articless');
Route::delete('articless/{id}', 'articlesController@destroy')->name('articless.destroy');
Route::get('articless/create', 'articlesController@create')->name('articless.create');
Route::post('articless', 'articlesController@store')->name('articless.store');
Route::get('articless/{id}/edit', 'articlesController@edit')->name('articless.edit');
Route::put('articless/{id}', 'articlesController@update')->name('articless.update');
Route::get('/categories/{id}/articless', 'articlesController@getListArticlesByCateID')->name('list-articles-by-cate');

Route::get('category', 'categoriesController@index')->name('list-category');


// Route::get('/', function () {
//     return view('welcome');
// });
// Route::group(['as'=>'page.','namespace'=>'User'],function(){
// 	Route::get('/users','UseController@index')->name('list-user');	//name ở đây là ta đặt để bên view gọi cho khơe
// 	Route::get('/users/create','UseController@create')->name('form-create-user');
// 	Route::post('/users','UseController@store')->name('user.store');
// 	Route::get('/users/{id}','UseController@show')->name('user.show');
// 	Route::get('/users/{id}/reset-password','UseController@reset')->name('reset-pass')->middleware('signed');
// });
// Route::get('/product',function(){
// 	return view('product.index');
// });
// Route::get('/demo','User\UseController@getUser');

// BAI TAP
// Route::get('/category','CategorieController@getListCate')->name('list-category');
// Route::get('/product','ProductController@getProduct')->name('list-product');
// Route::get('/add','ProductController@getAddProduct')->name('add-product');
// Route::post('/save','ProductController@getSaveProduct')->name('save-product');
// Route::get('/delete/{id}','ProductController@getDeleteProduct')->name('delete-product');
// Route::get('/edit/{id}','ProductController@getEditProduct')->name('edit-product');
// Route::post('/update','ProductController@getUpdateProduct')->name('update-product');
// Route::get('/product-of-cate/{id}','ProductController@getProductOfCate')->name('product-of-cate');
// CACH THAY
// Route::get('products', 'ProductController@index')->name('list-product');
// Route::get('products/create', 'ProductController@create')->name('product.create');
// Route::post('products', 'ProductController@store')->name('product.store');
// Route::get('products/{id}/edit', 'ProductController@edit')->name('product.edit');
// Route::put('products/{id}', 'ProductController@update')->name('product.update');
// Route::delete('products/{id}', 'ProductController@destroy')->name('products.destroy');

// Route::get('/categories', 'CategorieController@index')->name('list-cate');
// Route::get('/categories/{id}/products', 'ProductController@getListProductByCateID')->name('list-product-by-cate');




