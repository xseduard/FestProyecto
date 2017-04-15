<?php
use Illuminate\Support\Facades\Input;
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

Route::group(['middleware' => 'web'], function () {
    Route::auth(); //loog in loog out
    Route::get('/', function () {return view('auth.login_elementary');});
    //Route::get('/', function () {return view('auth.login');});
    Route::get('/admin', 'InicialController@index');
    Route::get('/home', 'HomeController@index');
    Route::get('/forma', 'formaController@index');
    Route::get('/index2', 'HomeController@index');
});


/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate');










Route::group(['middleware' => ['web']], function () {

	Route::resource("departamentos", "departamentoController");

	Route::get('departamentos/delete/{id}', [
	    'as' => 'departamentos.delete',
	    'uses' => 'departamentoController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("municipios", "municipioController");

	Route::get('municipios/delete/{id}', [
	    'as' => 'municipios.delete',
	    'uses' => 'municipioController@destroy',
	]);
});





Route::group(['middleware' => ['web']], function () {

	Route::resource("areas", "areaController");

	Route::get('areas/delete/{id}', [
	    'as' => 'areas.delete',
	    'uses' => 'areaController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("programas", "programaController");

	Route::get('programas/delete/{id}', [
	    'as' => 'programas.delete',
	    'uses' => 'programaController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("regionals", "RegionalController");

	Route::get('regionals/delete/{id}', [
	    'as' => 'regionals.delete',
	    'uses' => 'RegionalController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("sedes", "SedeController");

	Route::get('sedes/delete/{id}', [
	    'as' => 'sedes.delete',
	    'uses' => 'SedeController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("estados", "EstadoController");

	Route::get('estados/delete/{id}', [
	    'as' => 'estados.delete',
	    'uses' => 'EstadoController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("lineaInvestigacions", "Linea_InvestigacionController");

	Route::get('lineaInvestigacions/delete/{id}', [
	    'as' => 'lineaInvestigacions.delete',
	    'uses' => 'Linea_InvestigacionController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("grupoInvestigacions", "Grupo_InvestigacionController");

	Route::get('grupoInvestigacions/delete/{id}', [
	    'as' => 'grupoInvestigacions.delete',
	    'uses' => 'Grupo_InvestigacionController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("grupoJurados", "GrupoJuradoController");

	Route::get('grupoJurados/delete/{id}', [
	    'as' => 'grupoJurados.delete',
	    'uses' => 'GrupoJuradoController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("jurados", "JuradoController");

	Route::get('jurados/delete/{id}', [
	    'as' => 'jurados.delete',
	    'uses' => 'JuradoController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("eventoExpos", "EventoExpoController");

	Route::get('eventoExpos/delete/{id}', [
	    'as' => 'eventoExpos.delete',
	    'uses' => 'EventoExpoController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("estudiantes", "EstudianteController");

	Route::get('estudiantes/delete/{id}', [
	    'as' => 'estudiantes.delete',
	    'uses' => 'EstudianteController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("semilleros", "SemilleroController");

	Route::get('semilleros/delete/{id}', [
	    'as' => 'semilleros.delete',
	    'uses' => 'SemilleroController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("proyectos", "ProyectoController");

	Route::get('proyectos/delete/{id}', [
	    'as' => 'proyectos.delete',
	    'uses' => 'ProyectoController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("notas", "NotaController");

	Route::get('notas/delete/{id}', [
	    'as' => 'notas.delete',
	    'uses' => 'NotaController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("relIntegras", "RelIntegraController");

	Route::get('relIntegras/delete/{id}', [
	    'as' => 'relIntegras.delete',
	    'uses' => 'RelIntegraController@destroy',
	]);
});
