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

//Let laracast layer respond to anything by loading the welcome view. Let JS handle various routing intricacies
//Route::get('/{any?}', function () {
//    return view('app');
//});

//Updated to this to truly match anything (using regular expression). Before a route such as '/lorem/ipsum' would default to laravels missing page, and not our routes missing page
Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');
