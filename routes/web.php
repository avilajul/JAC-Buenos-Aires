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

Route::get('/', 'PagesController@getIndex');
Route::get('contactenos', 'PagesController@getContacto');
Route::get('quienes_somos', 'PagesController@getQuienesSomos');
Route::get('normatividad_comunal', 'PagesController@getNormatividadComunal');
Route::get('organizacion', 'PagesController@getOrganizacion');
Route::get('sitios_interes', 'PagesController@getSitiosInteres');
Route::get('cronograma', 'PagesController@getCronograma');
Route::resource('noticias', 'NoticiaController');

/*
Route::get('/', function () {
    return view('home');
});

Route::get('contactenos', function () {
    return view('contactenos');
});

Route::get('quienes_somos', function () {
    return view('quienes_somos');
});

Route::get('normatividad_comunal', function () {
    return view('normatividad_comunal');
});

Route::get('organizacion', function () {
    return view('organizacion');
});

Route::get('sitios_interes', function () {
    return view('sitios_interes');
});
Route::get('cronograma', function () {
    return view('cronograma');
});

Route::get('welcome', function () {
    return view('welcome');
});
*/
