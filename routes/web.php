<?php


Route::group(['prefix' => 'web', 'namespace' => 'Web'], function(\Illuminate\Routing\Router $router){
	$router->get('/','IndexController@index');

});

Route::group(['prefix' => 'shell', 'namespace' => 'Admin'], function(\Illuminate\Routing\Router $router){
	$router->get('/', 'IndexController@index')->name('admin.home');
	$router->resource('/banners', 'BannerController', ['names' => [
		'index' => 'admin.banner',
		'create' => 'admin.banner.create',
		'store' => 'admin.banner.store',
	]]);
	$router->get('/users', 'userController@index')->name('admin.users');
	$router->get('/media-index', 'userController@index')->name('admin.media.index');
});



Route::get('test', 'TestController@index');