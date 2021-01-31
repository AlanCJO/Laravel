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

/*
Route::get('/', function () {
    return "Olá, seja bem-vindo ao meu primeiro projeto Laravel!";
});
*/

Route::get('/', 'PrincipalController@principal');

Route::get('/sobre-nos', 'SobreNosController@sobreNos');

Route::get('/contato', 'ContatoController@contato');
// nome, categoria, assunto, mensagem


Route::get(
    '/contato/{nome?}/{categoria?}/{assunto?}/{mensagem?}', 
    function(
        string $nome = 'Desconhecido',
        string $categoria = 'Informação', 
        string $assunto = 'Contato', 
        string $mensagem = "mensagem não informada") 
        {
            echo "Parâmetro 1: {$nome} <br>
                Parâmetro 2: {$categoria} <br> 
                Parâmetro 3: {$assunto} <br> 
                Parâmetro 4: {$mensagem}";
        }
);


/* verbo http

get
post
put
patch
delete
options

*/