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

Route::model('Categorie','category');
Route::model('Product','product');
Route::model('Sub_categorie','subcategorie');




Route::get('/', 'indexController@index');
Route::get('/shop', 'indexController@shop');
Route::get('/shop/{category_id}', 'indexController@showByCategory');
Route::get('/Subshop/{category_id}', 'indexController@showBySubCategory');
Route::get('/shop/chairs/{id}', 'indexController@show');
Route::get('/shop/product/{product}', 'indexController@productprofile');
Route::post('/shop/{product_id}/product', 'indexController@makeOrder');
Route::get('/contact', 'indexController@contact');
Route::get('/about', 'indexController@about');



Route::get('/menu', 'CategorieController@index');
Route::post('/menu/store','CategorieController@store');
Route::post('/submenu/store','CategorieController@storesub');
Route::get('/menu/{category}','CategorieController@show');
Route::get('/submenu/{subcategorie}','CategorieController@showBySubCategoryProducts');











Route::get('/menu/trash/{category}','CategorieController@trash');
Route::get('/menu/destroy/{category_id}','CategorieController@destroy');
Route::get('/menu/edit/{category}','CategorieController@edit');
Route::post('/Category/update/{category_id}','CategorieController@update');


Route::post('/CategoryProduct/store','ProductController@store');
Route::post('/CategoryProduct/storesub','ProductController@storeSub');
Route::get('/CategoryProducts/edit/{product}','ProductController@edit');
Route::get('/subCategoryProducts/edit/{product}','ProductController@editsubcategory');
Route::post('/CategoryProducts/update/{product}','ProductController@update');
Route::post('/subCategoryProducts/update/{product}','ProductController@updatesubcategory');
Route::get('/CategoryProducts/{product}/destroy','ProductController@destroy');


Route::get('sendbasicemail','MailController@basic_email');
Route::get('sendhtmlemail','MailController@html_email');
Route::get('sendattachmentemail','MailController@attachment_email');



Auth::routes();

Route::get('/home', 'DashboardController@index')->name('home');
