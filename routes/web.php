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
    return view('dashboard');
});

// Route::get('/about', function(){
// 	return view('pages.about');
// });

//Route::get('/users/{id}/{name}', function($id, $name){
//    return 'this is user'.$id .'with'.$name;
//});

Route::get('/filter_code/{language}', 'CodeController@filter_code');

Route::resource('code', 'CodeController');


