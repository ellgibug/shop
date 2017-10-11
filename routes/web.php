<?php



Route::group(['middleware' => 'language'], function(){
    Route::get('/', 'ShopController@index');
    Route::get('/page2', 'ShopController@index2');

    Route::get('language/{lang?}', function($lang){
        \Session::put('locale', $lang);
        return back();
    });
});