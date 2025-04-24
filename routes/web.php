<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    return view('teste');
});

//em ordem, valor = $valor; 
Route::get('/teste/{valor}', function ($valor) {
    return "Você digitou: {$valor}";
});

Route::get('/soma/{x}/{y}', function ($x,$y) {
    return $x + $y;
});

//Calculos
Route::