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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('login',function(){
    return "You Need Tol login";
})->name('login');

Route::namespace('dashboard')->prefix('dashboard')->group(function(){

    Route::get('/','HomeController@index')->name('dashboard.home');

    Route::prefix('ads')->group(function(){
        Route::get('/','AdsController@index')->name('dashboard.ads');
        Route::get('/datatable','AdsController@datatable')->name('dashboard.ads.datatable');
    });


});

Route::namespace('frontend')->group(function(){
    Route::get('/','HomeController@index')->name('home');

   

});

