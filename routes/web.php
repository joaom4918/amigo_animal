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



Route::get('/',["as"=>"site.home","uses"=>"HomeController@index"]);
Route::get('admin/animais/adicionar_animal',["as"=>"admin.animais.adicionar_animal","uses"=>"AnimaisController@adicionar_animal"]);
Route::post('admin/animais/salvar_animal',["as"=>"admin.animais.salvar_animal","uses"=>"AnimaisController@salvar_animal"]);
Route::get('admin/animais/lista_animal',["as"=>"admin.animais.lista_animal","uses"=>"AnimaisController@lista_animal"]);
Route::get('admin/animais/excluir_animal/{idani}',["as"=>"admin.animais.excluir_animal","uses"=>"AnimaisController@excluir_animal"]);
Route::get('admin/animais/editar_animal/{idani}',["as"=>"admin.animais.editar_animal","uses"=>"AnimaisController@editar_animal"]);
Route::put('admin/animais/atualizar_animal/{idani}',["as"=>"admin.animais.atualizar_animal","uses"=>"AnimaisController@atualizar_animal"]);

## todas as listas por especie ficaram na pasta listas
Route::get('listas/lista_caes',["as"=>"listas.lista_caes","uses"=>"AnimaisController@lista_caes"]);
Route::get('listas/lista_gatos',["as"=>"listas.lista_gatos","uses"=>"AnimaisController@lista_gatos"]);
Route::get('listas/lista_aves',["as"=>"listas.lista_aves","uses"=>"AnimaisController@lista_aves"]);
Route::get('listas/lista_peixes',["as"=>"listas.lista_peixes","uses"=>"AnimaisController@lista_peixes"]);
Route::get('listas/lista_outros',["as"=>"listas.lista_outros","uses"=>"AnimaisController@lista_outros"]);




