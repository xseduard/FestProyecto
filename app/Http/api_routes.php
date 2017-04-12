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