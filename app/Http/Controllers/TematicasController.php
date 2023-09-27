<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tematica;

class TematicasController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'nombreTematica' => 'required|unique:tematicas,nombre|min:5|max:40',
        ]);

        $temat = new Tematica;
        $temat->nombre = $request->nombreTematica;

        $temat->save();
        return redirect()->route('comunicaciones')->with('success', 'Tamática agregada correctamente');
    }
}
