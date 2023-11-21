<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Contacto;
use App\Models\Departamento;
use App\Models\Origen;

class OrigenController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'nombre' => 'required|min:4|unique:origens',
        ]);
        $origen = new Origen;
        $origen->nombre = $request->nombre;
        $origen->save();
        return redirect()->back()->with('success', 'Origen creado correctamente');
    }
}

