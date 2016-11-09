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

    $intro = '<h3>Welcome to Lumbent version ' . getenv('API_VERSION'). '.</h3>'
        .'<p>More info about Lumbent API can be found from <a href="'.getenv('API_HOST').'/swagger/">Documentation</a></p>';
    return $intro;
});

$app->group(['namespace' => 'App\Http\Controllers\HelloWorld'], function() use ($app){
    $app->get('helloWorld/sayHi', 'HelloWorldController@index');
});
