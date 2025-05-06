<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitanteController extends Controller
{
    public function index()
    {
        return view('visitante.index');
    }

    public function store(Request $request)
    {
        // Validate and store the visitante data
        $validatedData = $request->validate([
            'tipo_documento' => 'required|string|max:255',
            'numero_documento' => 'required|string|max:255',
            'nome_visitante' => 'required|string|max:255',
            'telefone' => 'nullable',
        ]);

        $visitante = new Visitante();

        return redirect()->route('visitante.index')->with('success', 'Visitante cadastrado com sucesso!');
    }

    public function checkCpf(Request $request){
        $cpf = $request->input('cpf');
        $visitante = Visitante::where('cpf', $cpf)->first();

        if ($visitante) {
            return response()->json(['exists' => true]);
        } else {
            return response()->json(['exists' => false]);
        }
    }
}
