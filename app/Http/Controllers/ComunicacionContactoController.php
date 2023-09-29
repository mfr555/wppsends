<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ComunicacionContacto;
use App\Models\Contacto;


class ComunicacionContactoController extends Controller
{
    public function store(Request $request){

        $request->validate(['required|contacto_id' => 'exists:contactos,id',
                            'required|comunicacion_id' => 'exists:comunicacions,id',
                            ]);
        $existente = ComunicacionContacto::where(['contacto_id' => $request->contacto_id,
                                                'comunicacion_id' => $request->comunicacion_id,])->get();
        if ($existente->count() > 0){
            return redirect('/comunicaciones-abrir?id='.$request->comunicacion_id)
                    ->withErrors(['No se puede agregar la comunicación porque ya existe ['.
                                    $request->contacto_id.']['.$request->comunicacion_id.']']);
        } else {
            $nueva = new ComunicacionContacto;
            $nueva->contacto_id = $request->contacto_id;
            $nueva->comunicacion_id = $request->comunicacion_id;
            $nueva->usuario_id = Auth::user()->id;
            $nueva->save();
            return redirect('/comunicaciones-abrir?id='.$request->comunicacion_id)
                    ->with('warning','Comunicación enviada. Debe marcar si fue enviado, cancelado o con error');
        }

        //return redirect('/comunicaciones-abrir?id='.$request->comunicacion_id)
        //           ->with('warning','Comunicación enviada. Debe marcar si fue enviado, cancelado o con error');
    }

    public function update(Request $request){

        $request->validate(['contacto_id' => 'required|exists:comunicacion_contactos,contacto_id',
                            'comunicacion_id' => 'required|exists:comunicacion_contactos,comunicacion_id',
                            'recepcion' => 'required',
                            ]);

        $cc = new ComunicacionContacto;
        $cc->contacto_id = $request->contacto_id;
        $cc->comunicacion_id = $request->comunicacion_id;
        $cc->recepcion = $request->recepcion;
        $cc->usuario_id = Auth::user()->id;
        $cc->save();

        if ($request->recepcion == 'Error'){
            $contacto = Contacto::where('id', $request->contacto_id)->get()->first();
            $contacto->lista_negra = 1;
            $contacto->comentarios = 'Envío con error';
        }

        return redirect('/comunicaciones-abrir?id='.$request->comunicacion_id)
                    ->with('success','Estado de la comunicacion actualizado');

    }

    public function delete(Request $request){
        $request->validate(['contacto_id' => 'required|exists:comunicacion_contactos,contacto_id',
                            'comunicacion_id' => 'required|exists:comunicacion_contactos,comunicacion_id',
                            ]);

        $borrar = ComunicacionContacto::where(['contacto_id' => $request->contacto_id,
                                                'comunicacion_id' => $request->comunicacion_id,])
                                        ->get()->first()->forceDelete();

        return redirect('/comunicaciones-abrir?id='.$request->comunicacion_id)
                        ->with('success','Estado de la comunicacion eliminado');

    }
}
