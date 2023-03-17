<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return 'Projeto Programai';
});

$router->post('/api/login', 'TokenController@gerarToken');

// grupo api ...
$router->group(['prefix' => 'api', 'middleware' => 'auth'], function () use ($router) {

    // Linguagem
    $router->group(['prefix' => 'linguagem'], function () use ($router) {
        $router->get('', 'LinguagemController@index');
        $router->get('{id}', 'LinguagemController@show');
        $router->post('', 'LinguagemController@store');
        $router->put('{id}', 'LinguagemController@update');
        $router->delete('{id}', 'LinguagemController@delete');
    });

    // usuarios
    $router->group(['prefix' => 'users'], function () use ($router) {
        $router->get('', 'UserController@index');
    });


    // Teste simples de commit (paulo ricardo)
    $router->get('/teste','TesteController@teste');

    // matematica
    $router->group(['prefix' => 'mat'], function () use ($router) {
        $router->get('{teste}', 'MatematicaController@retornaAlgo');
        $router->post('', 'MatematicaController@somaAlgo');
        $router->post('/soma', 'MatematicaController@somaAlgoNovo');
        // media (paulo ricardo)
        $router->post('/media', 'MatematicaController@media4valores');
    });
    // formulario
    $router->group(['prefix' => 'formulario'], function () use ($router) {
        $router->get('', 'FormularioController@index');
        $router->get('{id}', 'FormularioController@show');
        $router->post('/salvar', 'FormularioController@salvaTabela');

    });
    // teste
});




