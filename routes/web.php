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

$router->get('/', function () use ($router) {
    return $router->app->version();
});
$router->get('/signup', 'signupController@create');
$router->post('/signup', 'signupController@store');
$router->get('/login', 'LoginController@create');
$router->post('/login', 'LoginController@store');
$router->get('/logout', 'LoginController@destroy');


 //$router->post('/pay', 'PaypalController@store');
  /*$router->post('/pay', function (Request $request) {
    $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email|unique:users'
    ]);
}*/
/*$router->post('pay', function (Request $request) {
    return 'Hello World';
});*/

  //Route::post('/pay', 'PaypalController@pay');


