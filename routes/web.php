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

/* Busca en la clase home en /App/Http/Controllers/PagesController.php */
Route::get('/', 'PagesController@home'); 

Route::get('/acerca', 'PagesController@aboutUs');