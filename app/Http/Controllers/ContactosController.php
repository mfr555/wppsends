<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class ContactosController extends Controller
{
    //
    public function store(Request $request){
        $request->validate([
            'tratamiento' => 'max:8',
            'nombre' => 'required|min:3',
            'cel' => 'required|digits:8|unique:contactos',
        ]);

        $contacto = new Contacto;

        if ($request->email != ""){
            $request->validate([
                'email' => 'email|unique:contactos',
            ]);

            $contacto->email = $request->email;
        }

        $contacto->tratamiento = $request->tratamiento;
        $contacto->nombre = $request->nombre;
        $contacto->apellido = $request->apellido;
        //$contacto->sexo = $request->sexo;
        $contacto->cel = $request->cel;
        //$contacto->departamento_id = $request->departamento_id;
        //$contacto->origen_id = $request->origen_id;

        $contacto->save();
        return redirect()->route('contactos')->with('success', 'Contacto agregado correctamente');
    }

    /*public function update(Request $request){
        $request->validate([
            'tratamiento' => 'max:8',
            'nombre' => 'required|min:3',
            'cel' => 'required|digits:8|unique:contactos',
        ]);

        $contacto = Contacto::where('cel', $request->cel)->get();

        if ($contacto != null){
            $contacto->tratamiento = $request->tratamiento;
            $contacto->nombre = $request->nombre;
            $contacto->apellido = $request->apellido;
            //$contacto->sexo = $request->sexo;
            $contacto->cel = $request->cel;
            //$contacto->departamento_id = $request->departamento_id;
            //$contacto->origen_id = $request->origen_id;

            $contacto->save();
            return redirect()->route('contactos')->with('success', 'Los datos del contacto fueron actualizados');
        }

    }*/

}

