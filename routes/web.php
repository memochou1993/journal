<?php

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

$router->group(['prefix' => 'api/journals'],  function($router) {
    $router->get('/', 'JournalController@index');
    $router->post('/', 'JournalController@store');
    $router->get('/{journal}', 'JournalController@show');
    $router->patch('/{journal}', 'JournalController@update');
    $router->delete('/{journal}', 'JournalController@destroy');
});