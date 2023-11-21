<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Contacto;
use App\Models\Departamento;
use App\Models\Origen;
use App\Models\Preferencia;
use App\Models\Tematica;

class ContactosController extends Controller
{

    public function showPage()
    {
        $contactos = Contacto::get();
        $origenes = Origen::get();
        $deptos = Departamento::get();
        $tematicas = Tematica::get();
        return view('base-de-datos.contacto-nuevo',
                        ['contactos' => $contactos,
                        'origenes' => $origenes,
                        'deptos' => $deptos,
                        'tematicas' => $tematicas,
                        ]);
    }

    public function updatePage(Request $request){
        $validated = $request->validate(['id' => 'required|exists:contactos,id']);
        $contacto = Contacto::where('id', $request->id)->get()->first();
        $origenes = Origen::get();
        $deptos = Departamento::get();
        if (!$validated){
            return redirect('/');
        } else {
            return view('base-de-datos.contacto-editar',
                            ['contacto' => $contacto,
                            'origenes' => $origenes,
                            'deptos' => $deptos,
                            ]);
        }
    }

    public function store(Request $request){
        $request->validate([
            'tratamiento' => 'max:8',
            'nombre' => 'required|min:3',
            'cel' => 'required|digits:8|unique:contactos',
            'origen_id' => 'required|exists:origens,id',
            'sexo' => [Rule::in(['Masculino', 'Femenino'])],
        ]);

        if(isset($request->departamento_id)){
            $request->validate(['departamento_id' => 'exists:departamentos,id', ]);
        }

        $preferencias = $request->input('preferencias');
        $preferencias = implode(',', $preferencias);
        foreach ($preferencias as $preferencia){
            $request->validate([
                $preferencia => 'exists:tematicas,id',
            ]);
        }

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
        if(isset( $request->departamento_id)){
            $contacto->departamento_id = $request->apelldepartamento_idido;
        }
        $contacto->origen_id = $request->origen_id;
        $contacto->comentarios = $request->comentarios;

        $contacto->save();

        foreach ($preferencias as $tematica_id){
            $preferencia = new Preferencia;
            $preferencia->contacto_id = $contacto->id;
            $preferencia->tematica_id = $tematica_id;
            $preferencia->aceptacion = 1;
            $preferencia->save();
        }

        return redirect()->route('contactos')->with('success', 'Contacto agregado correctamente');
    }

    public function update(Request $request){
        $request->validate([
            'id' => 'required|exists:contactos,id',
            'tratamiento' => 'max:8',
            'nombre' => 'required|min:3',
            'cel' => 'required|digits:8',
            'origen_id' => 'required|exists:origens,id',
            'sexo' => [Rule::in(['Masculino', 'Femenino'])],
        ]);
        if(isset($request->departamento_id)){
            $request->validate(['departamento_id' => 'exists:departamentos,id', ]);
        }

        $contacto = Contacto::where('id', $request->id)->get()->first();
        $contacto->tratamiento = $request->tratamiento;
        $contacto->nombre = $request->nombre;
        if(isset($request->apellido)){
            $contacto->apellido = $request->apellido;
        }
        //$contacto->sexo = $request->sexo;
        $contacto->cel = $request->cel;
        if(isset($request->departamento_id)){
            $contacto->departamento_id = $request->apelldepartamento_idido;
        }
        $contacto->origen_id = $request->origen_id;
        $contacto->lista_negra = ($request->lista_negra==1 ? true : false);
        $contacto->update();
        return redirect('contacto-editar?id='.$request->id)
                    ->with('success', 'Los datos del contacto fueron actualizados');

    }

}

