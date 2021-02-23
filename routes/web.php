<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/lab4', function(){
	return view('labs');
});
Route::get('/post/{id}', function ($id) {
    return "Your id is".$id;
});

Route::get('/post2/{id}/{age?}', function ($id,$age=14) {
    return "Your id is ".$id."Your age is ".$age;
});

Route::get('/route-example', function () {
    return "I love web programming!";
});
Route::get('/route-example', function () {
    return "web programming!";
});
Route::get('/route-example', function () {
    return " programming!";
});