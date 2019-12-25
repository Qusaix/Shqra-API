<?php

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login')->name('login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');


    

});

Route::prefix('categores')->group(function(){

    Route::get('/', 'CategoreController@get_all_categores')->name('all_catagores');

    Route::prefix('subcategores')->group(function(){

        Route::get('/{id}','SubcategoreController@get_all_subcategores')->name('all_subcategore');
        
    });


});

Route::prefix('post')->group(function(){

    Route::get('/{id}','PostController@get_all_posts')->name('all_posts');

});