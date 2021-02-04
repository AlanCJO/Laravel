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

// Definindo rotas com apelidos
Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', function(){ return 'Login'; })->name('site.login');

// agrupando rotas
Route::prefix('/app')->group(function() {
    Route::get('/clientes', function(){ return 'Clientes'; })->name('app.clientes');
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function(){ return 'Produtos'; })->name('app.produtos');
});

// rotas com parâmetros p/ o controlador
Route::get('/teste/{p1}/{p2?}', 'TesteController@teste')->name('site.teste');

// definindo fallback para a aplicação
Route::fallback(function() {
    return 'A rota acessada não existe. <a href="'.route('site.index').'"> 
            Clique aqui</a> para ir para página inicial';
});






















/*
Route::get('/', function () {
    return "Olá, seja bem-vindo ao meu primeiro projeto Laravel!";
});
*/

// Route::get('/rota1', function() {
//     echo 'Rota 1';
// })->name('site.rota1');


// Route::get('/rota2', function() {
//     return redirect()->route('site.rota1');
// })->name('site.rota2');

// Route::redirect('/rota2', '/rota1');

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

