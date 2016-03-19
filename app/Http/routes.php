<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|

Route::get('admin', function () {
    return view('admin_template');
});
*/
Route::get('/', function () {
    return view('welcome');
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/admin', 'InicialController@index');
    Route::get('/home', 'HomeController@index');
    Route::get('/forma', 'formaController@index');
});


/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/



Route::group(['middleware' => ['web']], function () {
    //

Route::resource("pruebaespecials", "PruebaespecialController");

Route::get('pruebaespecials/delete/{id}', [
    'as' => 'pruebaespecials.delete',
    'uses' => 'PruebaespecialController@destroy',
]);



Route::resource("unopruebas", "UnopruebaController");

Route::get('unopruebas/delete/{id}', [
    'as' => 'unopruebas.delete',
    'uses' => 'UnopruebaController@destroy',
]);


Route::resource("marios", "MarioController");

Route::get('marios/delete/{id}', [
    'as' => 'marios.delete',
    'uses' => 'MarioController@destroy',
]);



Route::resource("grados", "GradoController");

Route::get('grados/delete/{id}', [
    'as' => 'grados.delete',
    'uses' => 'GradoController@destroy',
]);

Route::resource("academicos", "AcademicoController");

Route::get('academicos/delete/{id}', [
    'as' => 'academicos.delete',
    'uses' => 'AcademicoController@destroy',
]);
});
