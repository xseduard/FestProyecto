<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where all API routes are defined.
|
*/





























Route::resource("departamentos", "departamentoAPIController");

Route::resource("municipios", "municipioAPIController");



Route::resource("areas", "areaAPIController");

Route::resource("programas", "programaAPIController");

Route::resource("regionals", "RegionalAPIController");

Route::resource("sedes", "SedeAPIController");

Route::resource("estados", "EstadoAPIController");

Route::resource("lineaInvestigacions", "Linea_InvestigacionAPIController");

Route::resource("grupoInvestigacions", "Grupo_InvestigacionAPIController");

Route::resource("grupoJurados", "GrupoJuradoAPIController");

Route::resource("jurados", "JuradoAPIController");

Route::resource("eventoExpos", "EventoExpoAPIController");

Route::resource("estudiantes", "EstudianteAPIController");

Route::resource("semilleros", "SemilleroAPIController");

Route::resource("proyectos", "ProyectoAPIController");

Route::resource("notas", "NotaAPIController");

Route::resource("relIntegras", "RelIntegraAPIController");

Route::resource("contenidos", "ContenidoAPIController");

Route::resource("titulos", "TituloAPIController");