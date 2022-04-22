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
/////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'AutoWorld'], function (){

    Route::get('',['uses' => 'AutoWorldController@index', 'as' => 'autoworld.index']);

    Route::get('search/{id}',['uses' => 'AutoWorldController@searchByBrand', 'as' => 'autoworld.searchByBrand']);

    Route::get('detail/{id}', ['uses' => 'AutoWorldController@detail', 'as' => 'autoworld.detail']);

});
Route::get('register',['uses' => 'AutoWorldController@registrationForm', 'as' => 'autoworld.register']);

///////////////////////////////////////////////////////////////////////////////////////////////
Route::group(['prefix' => 'customer', 'middleware'=>['manual.auth']], function(){
   Route::get('',[
       'uses' => 'CustomerController@index', 'as' => 'customer.index']) ;
   Route::get('detail/{id}',[
      'uses' => 'CustomerController@detail', 'as' => 'customer.detail']);
   Route::get('edit/{id}',[
      'uses' => 'CustomerController@edit', 'as' => 'customer.edit']);
   Route::post('update/{id}',[
      'uses' => 'CustomerController@update', 'as' => 'customer.update']);
   Route::get('confirm/{id}',[
      'uses' => 'CustomerController@confirm', 'as' => 'customer.confirm']);
   Route::post('destroy/{id}',[
      'uses' => 'CustomerController@destroy', 'as' => 'customer.destroy']);
});
//////////////////////////////////////////////////////////////////////////////////////////////
Route::group(['prefix' => 'adminManage','middleware'=>['manual.auth']], function(){
    Route::get('',[
        'uses' => 'AdminController@index', 'as' => 'admin.index']) ;
    Route::get('detail/{user_name}',[
        'uses' => 'AdminController@detail', 'as' => 'adminManage.detail']);
    Route::get('edit/{user_name}',[
        'uses' => 'AdminController@edit', 'as' => 'adminManage.edit']);
    Route::post('update/{user_name}',[
        'uses' => 'AdminController@update', 'as' => 'adminManage.update']);
    Route::get('confirm/{user_name}',[
        'uses' => 'AdminController@confirm', 'as' => 'adminManage.confirm']);
    Route::post('destroy/{user_name}',[
        'uses' => 'AdminController@destroy', 'as' => 'adminManage.destroy']);
});
//////////////////////////////////////////////////////////////////////////////////////////////
Route::group(['prefix' => 'brands','middleware'=>['manual.auth']], function (){
    Route::get('',[
        'uses' => 'BrandsController@index', 'as' => 'brands.index']);
    Route::get('create',[
        'uses' => 'BrandsController@create', 'as' => 'brands.create']);
    Route::post('store',[
        'uses' => 'BrandsController@store', 'as' => 'brands.store']);
    Route::get('edit/{brand_id}',[
        'uses' => 'BrandsController@edit', 'as' => 'brands.edit']);
    Route::post('update/{brand_id}',[
        'uses' => 'BrandsController@update', 'as' => 'brands.update']);
    Route::get('confirm/{brand_id}',[
        'uses' => 'BrandsController@confirm', 'as' => 'brands.confirm']);
    Route::post('destroy/{brand_id}',[
        'uses' => 'BrandsController@destroy', 'as' => 'brands.destroy']);
});
//////////////////////////////////////////////////////////////////////////////////////////////
Route::group(['prefix' => 'cars','middleware'=>['manual.auth']], function(){
    Route::get('',[
        'uses' => 'CarsController@index', 'as' => 'cars.index']);
    Route::get('create',[
        'uses' => 'CarsController@create', 'as' => 'cars.create']);
    Route::post('store',[
       'uses' => 'CarsController@store', 'as' => 'cars.store']);
    Route::get('/{id}',[
        'uses' => 'CarsController@searchByBrand', 'as' => 'cars.searchByBrand']);
    Route::get('detail/{id}',[
        'uses' => 'CarsController@searchById', 'as' => 'cars.detail']);
    Route::get('confirm/{id}',[
       'uses' => 'CarsController@confirm', 'as' => 'cars.confirm']);
    Route::post('destroy/{id}',[
        'uses' => 'CarsController@destroy', 'as' => 'cars.destroy']);
    Route::get('edit/{id}',[
       'uses' => 'CarsController@edit', 'as' => 'cars.edit']);
    Route::post('update/{id}',[
        'uses' => 'CarsController@update', 'as' => 'cars.update']);
});

/////////////////////////////////////////////////////////////////////////////////////////////  HOME

///////////////////////////////////////////////////////////////////////////////////////////////
Route::group(['prefix' => 'auth'], function(){
   Route::get('',[
      'uses' => 'AuthController@ask', 'as' => 'auth.ask']);

   Route:: post('login',[
       'uses' => 'AuthController@signin', 'as' => 'auth.signin']);

   Route::get('logout',[
       'uses' => 'AuthController@signout', 'as' => 'auth.signout']);
});
///////////////////////////////////////////////////////////////////////////////////////////////




