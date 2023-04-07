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

$router->get('/', function () {
    $server_status = 'OK'; // aquí puedes verificar el estado del servidor
    if ($server_status === 'OK') {
        return response(view('status', ['message' => 'Servidor OK','estatus'=>'200 Servidor Funcionando']), 200);
    } else {
        return response(view('status', ['message' => 'Estamos presentando problemas técnicos','estatus'=>'500 Error de Servidor ']),500);

    }
});
