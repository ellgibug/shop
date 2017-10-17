<?php



Route::group(['middleware' => 'language'], function(){

    Auth::routes();

    Route::get('/', 'ShopController@index');
    Route::get('section/{section}', 'ShopController@getProductsFromSection')->middleware('remove.token')->name('products-list');
    Route::get('product/{product}', 'ShopController@getSingleProduct')->name('product-single');

    Route::get('search', 'ShopController@search')->middleware('remove.token')->name('search');

    Route::get('cart', 'CartController@cart')->name('cart');
    Route::get('cart/{cart}', 'CartController@addProductToCart')->name('add-product-to-cart');
    Route::match(['put', 'patch'],'cart/{cart}', 'CartController@updateCart')->name('update-cart');
    Route::delete('cart/{cart}', 'CartController@deleteProductFromCart')->name('destroy-cart');

    Route::get('wishlist', 'CartController@wishlist')->name('wishlist');
    Route::get('wishlist/{wishlist}', 'CartController@addProductToWishlist')->name('add-product-to-wishlist');
//    Route::match(['put', 'patch'],'wishlist/{wishlist}', 'CartController@updateWishlist')->name('update-wishlist');
    Route::delete('wishlist/{wishlist}', 'CartController@deleteProductFromWishlist')->name('destroy-wishlist');

    Route::get('checkout', 'CheckoutController@index')->middleware('checkout')->name('checkout');
    Route::get('success', 'CheckoutController@success')->middleware('checkout')->name('success'); //защитить. только после успеха

    Route::get('home', 'UserController@index')->name('home');
    Route::match(['put', 'patch'],'home/{user}', 'UserController@update')->name('update-user');

    Route::get('page2', 'ShopController@index2')->name('page2');

    Route::get('language/{lang?}', function($lang){
        \Session::put('locale', $lang);
        return back();
    });

    Route::post('ajax/get', 'ShopController@getAjax')->name('get-ajax');
});

