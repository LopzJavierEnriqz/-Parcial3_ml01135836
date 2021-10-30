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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// ruta para alumnos
Route::resource('alumnos', 'AlumnosController');
// ruta para profesores
Route::resource('profesores', 'ProfesoresController');
// ruta para cursos
Route::resource('cursos', 'CursosController');
// ruta para notas
Route::resource('notas', 'NotasController');
// ruta para roles
Route::resource('roles', 'RolesController');


