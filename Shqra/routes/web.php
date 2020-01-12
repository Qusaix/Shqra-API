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
Route::get('rigster','dashboardAuth\Auth@rigster')->name('rigster');
Route::post('rigster','dashboardAuth\Auth@rigster_button')->name('rigster.user');




Route::namespace('dashboard')->middleware(['auth','role:admin'])->prefix('dashboard')->group(function(){

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

        // Delete Featured Routes
        Route::post('delete/{id}','featuredController@delete')->name('dashboard.featured.delete');





    });

    Route::prefix('rating')->group(function(){
        
        Route::post('store','RatingController@store')->name('dashboard.rating.store');

    });

    Route::prefix('users')->group(function(){
        Route::get('/','UserController@index')->name('dashboard.users');
        Route::get('/datatable','UserController@datatable')->name('dashboard.users.datatable');

    });

    Route::prefix('countdown')->group(function(){

        #Show Countdown Routes
        Route::get('/','CountdownController@index')->name('dashboard.countdown');

    });


});

Route::namespace('frontend')->group(function(){
    Route::get('/','HomeController@index')->name('home');

    #Product Routes 
    Route::prefix('product')->group(function(){

        Route::get("/{id}",'ProductController@index')->name('products');

    });

   

});

