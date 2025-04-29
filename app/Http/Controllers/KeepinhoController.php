<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;

class KeepinhoController extends Controller
{
    public function index() {
        $notas = Nota::all();
        // dd($var) = var_dump() and die()
        return view('keepinho/index', [
            'notas' => $notas
        ]);
        //ou compact($var);
    }
    public function gravar(Request $request) {
        dd($request->all());
    }
}