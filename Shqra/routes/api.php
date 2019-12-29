<?php

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

 ], function ($router) {

    Route::post('login', 'AuthController@login');

    Route::post('logout', 'AuthController@logout');

    Route::post('refresh', 'AuthController@refresh');
    
    Route::post('me', 'AuthController@me');

   
    
    
    

});

Route::post('rigster', 'RegisterController@create');



Route::prefix('categores')->group(function(){

    Route::get('/', 'CategoreController@get_all_categores')->name('all_catagores');

    Route::prefix('subcategores')->group(function(){

        Route::get('/{id}','SubcategoreController@get_all_subcategores')->name('all_subcategore');
        
    });


});

Route::prefix('post')->group(function(){

    Route::get('/{id}','PostController@get_all_posts')->name('all_posts');

});

Route::prefix('ads')->group(function(){

    Route::post('create','ads@create')->name('create.ads');

});

Route::prefix('orders')->group(function(){

    // See All Routes
    Route::get('/order/{id}','OrderController@one_order');
    Route::get('all','OrderController@all_orders');

    //Store
    Route::post('store','OrderController@store');

});


