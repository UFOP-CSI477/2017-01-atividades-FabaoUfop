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

//Rotas para página inicial do sistema:
Route::get('/', function () {
    return view('principal');
});


//implementar rota
//Route::get('/home', 'HomeController@index')->name('home');


//Rota para recuperar todos os procimentos do sistema
Route::get('/procedures/index.php',function($id){
  return 'procedures'.$id;
});

//Rotas para controlar os recursos do sistema

//Route::resource('/procedures', 'ProceduresController');
//Route::resource('/tests', 'TestsController');

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
