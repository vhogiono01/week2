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

Route::get('/', function () {
	return view ('Welcome');
	
});

Route::get('about', function(){
	return view('about');
});

route::get('halo/bebas',function(){
	return view('terserah.bebas');
    
});

route::get('gallery',function(){
	return view('terserah.gallery');
});
