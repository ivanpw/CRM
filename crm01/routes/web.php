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
    return view('home');
});

Route::get('/ejemplo','ejemploController@index');

//proyectos

Route::get('/registrarProyecto','proyectosController@registrar');

Route::post('/guardarProyecto','proyectosController@guardar');

Route::get('/consultarProyectos','proyectosController@consultar');

Route::get('/eliminarProyecto/{id}','proyectosController@eliminar');

Route::get('/editarProyecto/{id}','proyectosController@editar');

Route::post('/actualizarProyecto/{id}','proyectosController@actualizar');

Route::get('/proyectosPDF','proyectosController@pdf');

Route::get('/asignarRecurso/{id}','proyectosController@asignarRecurso');

Route::post('/guardarAsignacion/{id}','proyectosController@guardarrecurso');

Route::get('/eliminarAsignacion/{id}/{idp}','proyectosController@eliminarAsignacion');


//recursos

Route::get('/registrarRecursos','recursosController@registrar');

Route::post('/guardarRecurso','recursosController@guardar');

Route::get('/consultarRecursos','recursosController@consultar');

Route::get('/eliminarRecurso/{id}','recursosController@eliminar');

Route::get('/editarRecurso/{id}','recursosController@editar');

Route::post('/actualizarRecurso/{id}','recursosController@actualizar');

Route::get('/recursosPDF','recursosController@pdf');

Route::get('/send/{id}','mailController@send');



