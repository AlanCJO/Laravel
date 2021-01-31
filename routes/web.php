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

Route::get('/login', function(){ return 'Login'; });
Route::get('/clientes', function(){ return 'Clientes'; });
Route::get('/fornecedores', function() { return 'Fornecedores'; });

// Exemplos de parametrização e regex
/*
Route::get(
    '/contato/{nome?}/{categoria_id?}', // 
    function(
        string $nome = 'Desconhecido',
        int $categoria_id = 1) 
        {
            echo "Nome: {$nome} <br>
                  Contato: {$categoria_id} <br>";
        }
)->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');
*/















 
/* verbo http

get
post
put
patch
delete
options

*/


