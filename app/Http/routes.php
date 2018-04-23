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



    Route::get('/', function () {return view('auth.login_elementary');});
    //Route::get('/', function () {return view('auth.login');});
    Route::get('/admin', 'InicialController@index');
    Route::get('/home', 'HomeController@index');
    Route::get('/forma', 'formaController@index');
    Route::get('/index2', 'HomeController@index');


        //Route::auth(); //loog in loog out

  		Route::get('login', 'Auth\AuthController@showLoginForm');
        Route::post('login', 'Auth\AuthController@login');
        Route::get('logout', 'Auth\AuthController@logout');

        // Registration Routes...
        Route::get('register', 'Auth\AuthController@showRegistrationForm');
        Route::post('register', 'Auth\AuthController@register');

        // Password Reset Routes...
        Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
        Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
        Route::post('password/reset', 'Auth\PasswordController@reset');

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




	Route::resource("municipios", "municipioController");

	Route::get('municipios/delete/{id}', [
	    'as' => 'municipios.delete',
	    'uses' => 'municipioController@destroy',
	]);







	Route::resource("areas", "areaController");

	Route::get('areas/delete/{id}', [
	    'as' => 'areas.delete',
	    'uses' => 'areaController@destroy',
	]);





	Route::resource("programas", "programaController");

	Route::get('programas/delete/{id}', [
	    'as' => 'programas.delete',
	    'uses' => 'programaController@destroy',
	]);





	Route::resource("regionals", "RegionalController");

	Route::get('regionals/delete/{id}', [
	    'as' => 'regionals.delete',
	    'uses' => 'RegionalController@destroy',
	]);





	Route::resource("sedes", "SedeController");

	Route::get('sedes/delete/{id}', [
	    'as' => 'sedes.delete',
	    'uses' => 'SedeController@destroy',
	]);





	Route::resource("estados", "EstadoController");

	Route::get('estados/delete/{id}', [
	    'as' => 'estados.delete',
	    'uses' => 'EstadoController@destroy',
	]);





	Route::resource("lineaInvestigacions", "Linea_InvestigacionController");

	Route::get('lineaInvestigacions/delete/{id}', [
	    'as' => 'lineaInvestigacions.delete',
	    'uses' => 'Linea_InvestigacionController@destroy',
	]);





	Route::resource("grupoInvestigacions", "Grupo_InvestigacionController");

	Route::get('grupoInvestigacions/delete/{id}', [
	    'as' => 'grupoInvestigacions.delete',
	    'uses' => 'Grupo_InvestigacionController@destroy',
	]);





	Route::resource("grupoJurados", "GrupoJuradoController");

	Route::get('grupoJurados/delete/{id}', [
	    'as' => 'grupoJurados.delete',
	    'uses' => 'GrupoJuradoController@destroy',
	]);





	Route::resource("jurados", "JuradoController");

	Route::get('jurados/delete/{id}', [
	    'as' => 'jurados.delete',
	    'uses' => 'JuradoController@destroy',
	]);




	Route::resource("eventoExpos", "EventoExpoController");

	Route::get('eventoExpos/delete/{id}', [
	    'as' => 'eventoExpos.delete',
	    'uses' => 'EventoExpoController@destroy',
	]);





	Route::resource("estudiantes", "EstudianteController");

	Route::get('estudiantes/delete/{id}', [
	    'as' => 'estudiantes.delete',
	    'uses' => 'EstudianteController@destroy',
	]);



	Route::resource("usuarios", "UsuarioController");





	Route::resource("semilleros", "SemilleroController");

	Route::get('semilleros/delete/{id}', [
	    'as' => 'semilleros.delete',
	    'uses' => 'SemilleroController@destroy',
	]);




	Route::resource("proyectos", "ProyectoController");

	Route::get('proyectos/delete/{id}', [
	    'as' => 'proyectos.delete',
	    'uses' => 'ProyectoController@destroy',
	]);

	Route::get('revision_proyectos', [
	    'as' => 'proyectos.revision_proyectos',
	    'uses' => 'ProyectoController@revision_proyectos',
	]);

	
	Route::get('proyectos/rev/{id}', [
	    'as' => 'proyectos.rev',
	    'uses' => 'ProyectoController@solicitarRevision',
	]);
	Route::post('proyectos/asignar', [
	    'as' => 'proyectos.asignar',
	    'uses' => 'ProyectoController@asignar',
	]);
   // Route::get('/index2', 'HomeController@index');





	Route::resource("notas", "NotaController");

	Route::get('notas/delete/{id}', [
	    'as' => 'notas.delete',
	    'uses' => 'NotaController@destroy',
	]);

	Route::get('notas/crear/{id}', [
	    'as' => 'notas.crear',
	    'uses' => 'NotaController@crear',
	]);


	Route::resource("relIntegras", "RelIntegraController");

	Route::get('relIntegras/delete/{id}', [
	    'as' => 'relIntegras.delete',
	    'uses' => 'RelIntegraController@destroy',
	]);


	Route::get('export/pdf/{id}', 'ContenidoController@export_pdf')->name('contenidos.pdf');


	Route::resource("contenidos", "ContenidoController");

	Route::get('contenidos/delete/{id}', [
	    'as' => 'contenidos.delete',
	    'uses' => 'ContenidoController@destroy',
	]);

	Route::get('contenidos/crear/{id}', [
	    'as' => 'contenidos.crear',
	    'uses' => 'ContenidoController@crear',
	]);



	Route::resource("titulos", "TituloController");

	Route::get('titulos/delete/{id}', [
	    'as' => 'titulos.delete',
	    'uses' => 'TituloController@destroy',
	]);




}); //route group moddliware web
