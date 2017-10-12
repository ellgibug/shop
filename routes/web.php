<?php



Route::group(['middleware' => 'language'], function(){

    Route::get('/', 'ShopController@index');
    Route::get('section/{section}', 'ShopController@getProductsFromSection')->middleware('remove.token')->name('products-list');
    Route::get('product/{product}', 'ShopController@getSingleProduct')->name('product-single');

    Route::any('search', 'ShopController@search')->name('search');

//    Route::any('/filter', 'ShopController@filter')->name('filter');

    Route::get('page2', 'ShopController@index2')->name('page2');

    Route::get('language/{lang?}', function($lang){
        \Session::put('locale', $lang);
        return back();
    });
});

