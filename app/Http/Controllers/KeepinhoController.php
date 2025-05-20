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
        $dados = $request->validate([
            'titulo' => 'required|min:3',
            'texto' => 'required',
        ]);
        Nota::create($dados);
        return redirect()->route('keep');
    }

    public function editar(Nota $nota, Request $request){
        if ($request->isMethod('put')) {
            $nota = Nota::find($request->id);
            $nota->fill($request->all());

            $nota->save();

            return redirect()->route('keep');

        }
    }

    public function apagar(Nota $nota) {
        $nota->delete();
        return redirect()->route('keep');
    }
}