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

//página 
//rota::obtem('url', 'classe_controller@metodo')
//Route::get('/master', 'Controller@homepage');

//página layout master 
Route::get('/master', function () {
    return view('master');
});

//página layout tarefas
Route::get('/ap', function () {
    return view('/pages/tasks/tasks');
});

Route::get('/video', function () {
    return view('/pages/tasks/video');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

