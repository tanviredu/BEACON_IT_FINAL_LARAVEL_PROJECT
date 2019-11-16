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
    return view('welcome');
});


/* this is added by default after authentication is done
*	the route /home is redirect to the homeController
*   if you go to the home controllser it use the auth
*	middleware so to go to home you have to go through
*	the authntication  process
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
