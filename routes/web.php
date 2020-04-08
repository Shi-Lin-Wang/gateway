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
$router->get('/chooseShop', 'chooseShopController@index');

$router->get('/browserProduct', 'browserProductController@create');
$router->post('/browserProduct1', 'browserProductController@store');

$router->get('/viewProduct', 'viewProductController@create');
$router->post('/viewProduct1', 'viewProductController@store');
$router->post('/addcart', 'cartController@addcart');
$router->get('/cart', 'cartController@cart');
$router->get('/getcartDetail', 'cartController@getcartDetail');
$router->get('/CartDelete', 'cartController@CartDelete');
$router->get('/getOrder', 'OrderController@getOrder');
$router->get('/viewOrder', 'OrderController@viewOrder');
$router->get('/CartToOrder', 'cartController@CartToOrder');
$router->get('/navSigninCheck', 'SigninCheckController@navSigninCheck');
$router->post('/getcart', 'getCartAmountController@store');
$router->get('/pay', 'PaypalController@pay');
//$router->post('/pay', 'PaypalController@pay');


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


