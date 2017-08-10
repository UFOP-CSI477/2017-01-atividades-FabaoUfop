<?php
//Rotas para página inicial do sistema:
Route::get('/home', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('principal');
});

//Rotas para cada area do sistema
Route::get('/geral', function () {
    return view('geral');
});
Route::get('/pacientes', function(){
    return view('pacientes');
});
Route::get('/administradores',function(){
    return view('administradores');
});

//Rotas para controlar os recursos do sistema
Route::resource('/procedures', 'ProceduresController');
Route::resource('/tests', 'TestsController');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

//Rotas para nomear os tipos de usuários do sistema
/*
Route::namespace('Admin')->group(function () {
    // Controllers Within The "App\Http\Controllers\Admin" Namespace
});
Route::namespace('Operador')->group(function () {
    // Controllers Within The "App\Http\Controllers\Operador" Namespace
});
Route::namespace('Paciente')->group(function () {
    // Controllers Within The "App\Http\Controllers\Paciente" Namespace
});
**/
