<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculosController extends Controller
{
    function somar($x,$y) {return $x+$y;}
    function subtrair($x,$y) {return $x-$y;}
    function multiplicar($x,$y) {return $x*$y;}
    function dividir($x,$y) {return $x/$y;}
    function quadrado($x) {return $x**2;}
}