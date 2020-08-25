<?php
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PageController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/exportar', 'PageController@exportEXCEL')->name('exportar');

Route::post('/store', 'PageController@store')->name('store');

Route::get('/inscripcion', 'PageController@create')->name('inscripcion');

Route::get('estudiantes-list-pdf', 'PageController@exportPDF')->name('estudiantesExport.pdf');

Route::delete('eliminar/{id}', 'PageController@eliminar')->name('eliminar');


