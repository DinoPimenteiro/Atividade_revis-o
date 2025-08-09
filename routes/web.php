<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/tabela', function () {
    return view('tabela');
});

Route::get('/jogos', function () {
    return view('jogos');
});


Route::get('/cadastro', function () {
    return view('cadastro');
});



