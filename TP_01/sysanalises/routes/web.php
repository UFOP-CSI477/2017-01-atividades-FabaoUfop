<?php

//Rotas para página inicial do sistema:
Route::get('/', function () {
    return view('welcome');
});
//Rotas para cada area do sistema

/**
Route::get('geral', function () {
    return view('geral')
});
Route::get('pacientes', function(){
    return view('pacientes')
);
Route::get('administradores',function(){
    return view('administradores')
});
**/

//implementar rota
//Route::get('/home', 'HomeController@index')->name('home');


//Rota para recuperar todos os procimentos do sistema
Route::get('/procedures/index.php',function($id){
  return 'procedures'.$id;
});

//Rotas para controlar os recursos do sistema

Route::resource('/procedures', 'ProceduresController');
Route::resource('/tests', 'TestsController');

//Rotas para /users
Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});
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
