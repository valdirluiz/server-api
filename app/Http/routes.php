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

$app->get('/', function () use ($app) {
    return 'Voce acabou de visitar meu site ';
});

$app->get('/estabalecimentos', function () {
	return DB::select("select estabelecimento_nome as nome from estabelecimentos");
});

$app->get('/estabalecimentos/{codigo}', function ($codigo) {
	return DB::select("select estabelecimento_nome as nome from estabelecimentos where estabelecimento_codigo = '$codigo'" );
});
