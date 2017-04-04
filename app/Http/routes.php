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
    Route::auth();
    Route::get('/', function () {return view('auth.login');});
    Route::get('/admin', 'InicialController@index');
    Route::get('/home', 'HomeController@index');
    Route::get('/forma', 'formaController@index');
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
    Route::resource("pruebaespecials", "PruebaespecialController");

    Route::get('pruebaespecials/delete/{id}', [
        'as' => 'pruebaespecials.delete',
        'uses' => 'PruebaespecialController@destroy',
    ]);

});
Route::group(['middleware' => ['web']], function () {
    Route::resource("unopruebas", "UnopruebaController");

    Route::get('unopruebas/delete/{id}', [
        'as' => 'unopruebas.delete',
        'uses' => 'UnopruebaController@destroy',
    ]);

});



Route::group(['middleware' => ['web']], function () {

	Route::resource("programas", "ProgramaController");

	Route::get('programas/delete/{id}', [
	    'as' => 'programas.delete',
	    'uses' => 'ProgramaController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("academicos", "AcademicoController");

	Route::get('academicos/delete/{id}', [
	    'as' => 'academicos.delete',
	    'uses' => 'AcademicoController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("docentes", "DocenteController");

	Route::get('docentes/delete/{id}', [
	    'as' => 'docentes.delete',
	    'uses' => 'DocenteController@destroy',
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

	Route::resource("grupoInvestigacions", "GrupoInvestigacionController");

	Route::get('grupoInvestigacions/delete/{id}', [
	    'as' => 'grupoInvestigacions.delete',
	    'uses' => 'GrupoInvestigacionController@destroy',
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

	Route::resource("trabajoGrados", "TrabajoGradoController");

	Route::get('trabajoGrados/delete/{id}', [
	    'as' => 'trabajoGrados.delete',
	    'uses' => 'TrabajoGradoController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("ponencias", "PonenciaController");

	Route::get('ponencias/delete/{id}', [
	    'as' => 'ponencias.delete',
	    'uses' => 'PonenciaController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("eventoCs", "EventoCController");

	Route::get('eventoCs/delete/{id}', [
	    'as' => 'eventoCs.delete',
	    'uses' => 'EventoCController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("productoGrupos", "ProductoGrupoController");

	Route::get('productoGrupos/delete/{id}', [
	    'as' => 'productoGrupos.delete',
	    'uses' => 'ProductoGrupoController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("proyectoAulas", "ProyectoAulaController");

	Route::get('proyectoAulas/delete/{id}', [
	    'as' => 'proyectoAulas.delete',
	    'uses' => 'ProyectoAulaController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("lineaIs", "LineaIController");

	Route::get('lineaIs/delete/{id}', [
	    'as' => 'lineaIs.delete',
	    'uses' => 'LineaIController@destroy',
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

	Route::resource("rOfreces", "ROfreceController");

	Route::get('rOfreces/delete/{id}', [
	    'as' => 'rOfreces.delete',
	    'uses' => 'ROfreceController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("rCoordinasems", "RCoordinasemController");

	Route::get('rCoordinasems/delete/{id}', [
	    'as' => 'rCoordinasems.delete',
	    'uses' => 'RCoordinasemController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("rDesarrollas", "RDesarrollaController");

	Route::get('rDesarrollas/delete/{id}', [
	    'as' => 'rDesarrollas.delete',
	    'uses' => 'RDesarrollaController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("rIntegras", "RIntegraController");

	Route::get('rIntegras/delete/{id}', [
	    'as' => 'rIntegras.delete',
	    'uses' => 'RIntegraController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("rEstudias", "REstudiaController");

	Route::get('rEstudias/delete/{id}', [
	    'as' => 'rEstudias.delete',
	    'uses' => 'REstudiaController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("rArbitras", "RArbitraController");

	Route::get('rArbitras/delete/{id}', [
	    'as' => 'rArbitras.delete',
	    'uses' => 'RArbitraController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("rRealizas", "RRealizaController");

	Route::get('rRealizas/delete/{id}', [
	    'as' => 'rRealizas.delete',
	    'uses' => 'RRealizaController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("rCoordinas", "RCoordinaController");

	Route::get('rCoordinas/delete/{id}', [
	    'as' => 'rCoordinas.delete',
	    'uses' => 'RCoordinaController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("rSuscribes", "RSuscribeController");

	Route::get('rSuscribes/delete/{id}', [
	    'as' => 'rSuscribes.delete',
	    'uses' => 'RSuscribeController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("doncencias", "DoncenciaController");

	Route::get('doncencias/delete/{id}', [
	    'as' => 'doncencias.delete',
	    'uses' => 'DoncenciaController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("proyectoInvestigacions", "ProyectoInvestigacionController");

	Route::get('proyectoInvestigacions/delete/{id}', [
	    'as' => 'proyectoInvestigacions.delete',
	    'uses' => 'ProyectoInvestigacionController@destroy',
	]);

	Route::get('proyectoInvestigacions/inconsulta', [
	    'as' => 'proyectoInvestigacions.inconsulta',
	    'uses' => 'ProyectoInvestigacionController@inconsulta',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("pais", "PaisController");

	Route::get('pais/delete/{id}', [
	    'as' => 'pais.delete',
	    'uses' => 'PaisController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("nodos", "NodoController");

	Route::get('nodos/delete/{id}', [
	    'as' => 'nodos.delete',
	    'uses' => 'NodoController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("universidades", "UniversidadesController");

	Route::get('universidades/delete/{id}', [
	    'as' => 'universidades.delete',
	    'uses' => 'UniversidadesController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("semilleros", "SemillerosController");

	Route::get('semilleros/delete/{id}', [
	    'as' => 'semilleros.delete',
	    'uses' => 'SemillerosController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("proyectoCategorias", "ProyectoCategoriaController");

	Route::get('proyectoCategorias/delete/{id}', [
	    'as' => 'proyectoCategorias.delete',
	    'uses' => 'ProyectoCategoriaController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("eStudiantes", "EStudiantesController");

	Route::get('eStudiantes/delete/{id}', [
	    'as' => 'eStudiantes.delete',
	    'uses' => 'EStudiantesController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("nivelformacions", "NivelformacionController");

	Route::get('nivelformacions/delete/{id}', [
	    'as' => 'nivelformacions.delete',
	    'uses' => 'NivelformacionController@destroy',
	]);
});






Route::group(['middleware' => ['web']], function () {

	Route::resource("asignaturas", "AsignaturasController");

	Route::get('asignaturas/delete/{id}', [
	    'as' => 'asignaturas.delete',
	    'uses' => 'AsignaturasController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("areainvestigacions", "AreainvestigacionController");

	Route::get('areainvestigacions/delete/{id}', [
	    'as' => 'areainvestigacions.delete',
	    'uses' => 'AreainvestigacionController@destroy',
	]);
});



Route::group(['middleware' => ['web']], function () {

	Route::resource("subareas", "SubareaController");

	Route::get('subareas/delete/{id}', [
	    'as' => 'subareas.delete',
	    'uses' => 'SubareaController@destroy',
	]);
});

Route::post('/upload', function(){
     if(Input::hasFile('archivo')) {
          Input::file('archivo')
               ->move('carpetaProyectos','proyecto');
     }
     //return Redirect::back('/proyectoInvestigacions');
      return redirect('/proyectoInvestigacions');
 });
