<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/sultan', function () {
    return "hello sultan";
});

Route::namespace("Front")->group(function(){

    Route::get("ali","userController@showUserName");
    Route::get("welcome","userController@showWelcome");
    


});

Route::prefix("users")->group(function(){
    Route::get("ahmed","Front\userController@showUserName");
});

Route::group(["prefix"=>"users","middleware"=>"auth"],function(){
    Route::get("nasser",function(){
        return "Nasser Ali";
    });
});

    //middleware
Route::get("check",function(){
       return "hello middlaware";
 })->middleware("auth");



Route::group(["namespace"=>"Admin"],function(){
    Route::get("second","SecondController@showString");
    Route::get("second1","SecondController@showString1");
    Route::get("second2","SecondController@showString2");

    }); 

Route::get("login",function(){
    return "must be login to access this Route ";
})->name("login");



Route::resource("news","NewsController");

Route::get('landing',function(){
return view('landing');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('fillable','CrudController@getOffers');


Route::group(['prefix'=>'offers'],function(){
// Route::get('store','CrudController@store');
Route::get('create','CrudController@create');
Route::post('store','CrudController@store')->name('offers.store');
Route::get('all','CrudController@getAllOffers')->name('offers.all');

Route::get('edit/{offer_id}','CrudController@editOffer');
Route::post('update/{offer_id}','CrudController@updateOffer')->name('offers.update');
// Route::get('show/{offer_id}','CrudController@show')->name('offers.show');
});