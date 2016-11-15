<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	$footer01 = true;
    return view('pages.landing', compact('footer01'));
});

Route::get('/privacy', function () {
	$footer01 = false;
    return view('pages.privacy', compact('footer01'));
});
