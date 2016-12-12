<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/invalid-argument', function(){

	return substr();

});

Route::get('/undefined-method-1', function(){
	$Class = new \stdClass();
	return $Class->doSomething();
});

Route::get('/undefined-method-2', function(){
	$Class = new \DateTime();
	return $Class->doSomething();
});