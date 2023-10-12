<?php

use Pecee\Http\Input\InputHandler;
use \Pecee\SimpleRouter\SimpleRouter as Route;

Route::get('/', function () {
    require_once('./View/Home.php');
});


Route::get('/Login', function () {
    require_once('./View/Login.php');
});

Route::post('/Login', function () {
    require_once('./Routes/Postlogin.php');
});

Route::get('/Cadastro', function () {
    require_once('./View/Cadastro.php');
});

Route::get('/Logado', function () {
    require_once('./View/Logado.php');
});