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
        /*Cria uma nota com todos os valores enviados pelo formulario. Porem,
        a model vai ficar apenas com aqueles listados no $fillable*/
        Nota::create($request->all());
        return redirect()->route('keep');
    }

    public function editar($nota){
        return view ('keepinho.editar', [
            'nota' => $nota,
        ]);
    }

    public function apagar(Nota $nota) {
        $nota->delete();
        return redirect()->route('keep');
    }
}