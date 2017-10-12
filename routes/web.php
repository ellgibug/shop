<?php



Route::group(['middleware' => 'language'], function(){
    Route::get('/', 'ShopController@index');

    Route::get('section/{section}', 'ShopController@getProductsFromSection')->name('products-list');

//    Route::any('/filter', 'ShopController@filter')->name('filter');

    Route::get('/page2', 'ShopController@index2')->name('page2');

    Route::get('language/{lang?}', function($lang){
        \Session::put('locale', $lang);
        return back();
    });
});

