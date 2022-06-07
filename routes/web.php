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

// Route::get('/', function () {
//     return view('guest.home');
// });

Auth::routes();


//tutte le rotte soggette a middleware
Route::middleware('auth')
->prefix('admin')
->name('admin.')
->namespace('Admin')
->group( function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('posts', 'PostController');
});
//accetto qualsisi cosa dopo / per non aver errori ed essere reindirizzato ad una pagina specifica
Route::get('{any?}', function(){
    return view('guest.home');
})->where("any", ".*");
