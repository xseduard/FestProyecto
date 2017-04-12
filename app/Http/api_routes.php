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