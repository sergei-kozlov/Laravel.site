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

//Route::get('/', function () {
//    return view('welcome');
//});

use Illuminate\Support\Facades\Route;

Route::auth();

//Route::get('/home', 'HomeController@index');

//Route::get('/auth', function () {
//    return View::make('auth.register');
//
//});


Route::get('/', 'HomeController@showWelcome');

Route::get('/blog', 'BlogController@index');

Route::get('/{slug}.html', function ($slug) {
    $title = ucfirst($slug);
    $longtitle = ucfirst($slug);
    return View::make('pages.' . $slug, compact('longtitle', 'title'));
})->where('slug', '(about|contact|services)');


//Вызов контроллера для записи данных в БД
Route::post('store', ['as' => 'store', 'uses' => 'BlogController@store']);


//Вызов контроллера для удаления данных из БД RESTful
Route::resource('blog', 'BlogController');
