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
Route::get('login','dashboardAuth\Auth@login')->name('login');
Route::post('login','dashboardAuth\Auth@login_button')->name('login_now');
Route::post('logout','dashboardAuth\Auth@logout')->name('logout');




Route::namespace('dashboard')->middleware('auth')->prefix('dashboard')->group(function(){

    Route::get('/','HomeController@index')->name('dashboard.home');

    Route::prefix('ads')->group(function(){
        Route::get('/','AdsController@index')->name('dashboard.ads');
        Route::get('/datatable','AdsController@datatable')->name('dashboard.ads.datatable');
        
        // Create Ads

        Route::get('create','AdsController@create')->name('dashboard.ads.create');
        Route::post('store','AdsController@store')->name('dashboard.ads.store');


        // Edit Ads

        Route::get('edit/{id}','AdsController@edit')->name('dashboard.ads.edit');
        Route::post('update/{id}','AdsController@update')->name('dashboard.ads.update');



    });

    Route::prefix('featured')->group(function(){

        Route::get('/','featuredController@index')->name('dashboard.featured');

        // Store Featured Routes
        Route::get('create','featuredController@create')->name('dashboard.featured.create');
        Route::post('store','featuredController@store')->name('dashboard.featured.store');
        
        // Update Featured Routes
        Route::get('/{id}','featuredController@edit')->name('dashboard.featured.edit');
        Route::post('update/{id}','featuredController@update')->name('dashboard.featured.update');





    });


});

Route::namespace('frontend')->group(function(){
    Route::get('/','HomeController@index')->name('home');

   

});

