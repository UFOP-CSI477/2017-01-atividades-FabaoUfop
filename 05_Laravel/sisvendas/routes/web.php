<?php

Route::get('/welcome', function () {
    return view('welcome');
});

// Loja
Route::get('/', 'LojaController@index');
Route::get('/loja/view/{produto}', 'LojaController@view');
Route::post('/carrinho/adicionar/{produto}', 'CarrinhoController@add');
Route::get('/carrinho','CarrinhoController@view');
Route::get('/carrinho/comprar','CarrinhoController@store');

//Recursos
Route::resource('/produtos', 'ProdutosController');
Route::resource('/fornecedores', 'FornecedorController',
  ['parameters' => [ 'fornecedores' => 'fornecedor' ]]);

Route::resource('/entradas', 'EntradaController');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
