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
Route::group(['prefix' => 'customer'], function(){
   Route::get('',[
       'uses' => 'CustomerController@index',
       'as' => 'customer.index'
   ]) ;
   Route::get('detail/{id}',[
      'uses' => 'CustomerController@detail',
      'as' => 'customer.detail'
   ]);
   Route::get('edit/{id}',[
      'uses' => 'CustomerController@edit',
      'as' => 'customer.edit'
   ]);
   Route::post('update/{id}',[
      'uses' => 'CustomerController@update',
      'as' => 'customer.update'
   ]);
   Route::get('confirm/{id}',[
      'uses' => 'CustomerController@confirm',
       'as' => 'customer.confirm'
   ]);
   Route::post('destroy/{id}',[
      'uses' => 'CustomerController@destroy',
      'as' => 'customer.destroy'
   ]);
});
///////////////////////////////////////////////////////////////////////////////////////////////
Route::group(['prefix' => 'admin'], function(){
   Route::get('',[
       'uses' => 'AdminController@index',
       'as' => 'admin.index'
   ]);
});
/////////////////////////////////////////////////////////////////////////////////////////////  HOME
Route::group(['prefix' => 'AutoWorld'], function (){
    Route::get('',function (){
     return view('autoworld.masterAuto.masterNav');
    })->name('autoworld/test');
});
