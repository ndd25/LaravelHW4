<?php

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

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::post('/contact', function () {

    $address = request()->all();

    $username = implode('@', explode('@', $address['email'], -1));

    echo "<link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css' rel='stylesheet'>";

    echo "<h1>Thank You</h1>";
    echo "Email: " . $address['email'] . '<br>';
    echo "Body: " . $address['body'] . '<br>';
    echo 'Name: ' . $username;


});