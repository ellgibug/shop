<?php



Route::group(['middleware' => 'language'], function(){

    Auth::routes();

//    Route::post('login', 'Auth\LoginController@login')->name('login');
//    Route::get('/', 'Auth\LoginController@showLoginForm');
//    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
//    Route::post('register', 'Auth\RegisterController@register')->name('register');
//    Route::get('/', 'Auth\LoginController@showLoginForm');

    Route::get('/', 'ShopController@index')->name('main');
    Route::get('section/{section}', 'ShopController@getProductsFromSection')->middleware('remove.token')->name('products-list');
    Route::get('product/{product}', 'ShopController@getSingleProduct')->name('product-single');

    Route::get('search', 'ShopController@search')->middleware('remove.token')->name('search');

    Route::get('cart', 'CartController@cart')->name('cart');
    Route::get('cart/{cart}', 'CartController@addProductToCart')->name('add-product-to-cart');
    Route::match(['put', 'patch'],'cart/{cart}', 'CartController@updateCart')->name('update-cart');
    Route::delete('cart/{cart}', 'CartController@deleteProductFromCart')->name('destroy-cart');

    Route::get('wishlist', 'CartController@wishlist')->name('wishlist');
    Route::get('wishlist/{wishlist}', 'CartController@addProductToWishlist')->name('add-product-to-wishlist');
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

Route::prefix('admin')->group(function (){
    Route::get('login', 'Auth\AdminLoginController@showLoginForm')->name('admin-login');
    Route::post('login', 'Auth\AdminLoginController@login')->name('admin-login-submit');
    Route::get('/', 'AdminController@index')->name('admin-dashboard');

    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin-logout');

});

