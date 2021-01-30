<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/admin')->namespace('Admin')->group(function(){
    //Admin Routes
Route::match(['get', 'post'], '/', 'AdminController@login');
Route::group(['middleware'=>['admin']],function(){
Route::get('dashboard', 'AdminController@dashboard');
Route::get('settings', 'AdminController@settings');
Route::post('checkcurrentpassword', 'AdminController@checkCurrentPassword');
Route::post('changepassword', 'AdminController@changePassword');
Route::match(['get','post'], 'updateadmindetails', 'AdminController@updateAdminDetails');
Route::get('logout', 'AdminController@logout');

//Sections
Route::get('sections', 'SectionController@index');
Route::post('add-section', 'SectionController@addSection');
Route::post('edit-section', 'SectionController@editSection');
Route::get('delete-section/{id}', 'SectionController@deleteSection');
Route::post('updatesectionstatus', 'SectionController@updateSectionStatus');

//Categories
Route::get('categories', 'CategoryController@index');
Route::post('updatecategorystatus', 'CategoryController@updateCategoryStatus');
Route::match(['get', 'post'], 'add-edit-category/{id?}', 'CategoryController@addEditCategory');
Route::post('addcategory', 'CategoryController@addCategory');
Route::get('editcategory/{id}', 'CategoryController@edit');
Route::post('editcategory', 'CategoryController@editCategory')->name('editcategory');
Route::post('append-categories-level', 'CategoryController@appendCategoryLevel');
Route::get('delete-category-image/{id}', 'CategoryController@deleteCategoryImage');
Route::get('delete-category/{id}', 'CategoryController@deleteCategory');

//Products
Route::get('products', 'ProductsController@products');
Route::post('updateproductstatus', 'ProductsController@updateProductStatus');
Route::get('delete-product/{id}', 'ProductsController@deleteProduct');
Route::match(['get','post'], 'add-edit-product/{id?}', 'ProductsController@addEditProduct');
Route::get('delete-product-image/{id}', 'ProductsController@deleteProductImage');

//Attributes
Route::match(['get','post'], 'add-attributes/{id}', 'ProductsController@addAttributes');
Route::post('edit-attributes/{id}', 'ProductsController@editAttributes');
Route::post('updateattributestatus', 'ProductsController@updateAttributeStatus');
Route::get('delete-product-attribute/{id}', 'ProductsController@deleteAttribute');

//Add Alternate Images
Route::match(['get','post'], 'add-images/{id}', 'ProductsController@addImages');
Route::post('updateimagestatus', 'ProductsController@updateAlternateImageStatus');
Route::get('delete-product-alternate-image/{id}', 'ProductsController@deleteAlternateImage');

//Brands
Route::get('brands','BrandController@brands');
Route::post('add-brand', 'BrandController@addBrand');
Route::post('edit-brand', 'BrandController@editBrand');
Route::post('updatebrandstatus', 'BrandController@updateBrandStatus');
Route::get('delete-brand/{id}', 'BrandController@deleteBrand');


});
});

// Frontend
Route::namespace('Frontend')->group(function(){

    Route::get('/', 'IndexController@index'); 
    Route::get('/shop', 'IndexController@shop')->name('shop'); 
    Route::get('/{url}', 'ProductsController@listing'); 

});