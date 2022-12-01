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


// grupo api ...
$router->group(['prefix' => 'api'], function () use ($router) {

    // Linguagem
    $router->group(['prefix' => 'linguagem'], function () use ($router) {
        $router->get('', 'LinguagemController@index');
        $router->post('', 'LinguagemController@store');
        $router->delete('{id}', 'LinguagemController@delete');
    });

    // usuarios
    $router->group(['prefix' => 'users'], function () use ($router) {
        $router->get('', 'UserController@index');
    });

});




