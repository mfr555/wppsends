<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
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
            $nueva->created_at = Carbon::now();
            $nueva->updated_at = $nueva->created_at;
            $nueva->save();
            return redirect('/comunicaciones-abrir?id='.$request->comunicacion_id)
                    ->with('warning','Comunicación enviada. Debe marcar si fue enviado, cancelado o con error');
        }

        //return redirect('/comunicaciones-abrir?id='.$request->comunicacion_id)
        //           ->with('warning','Comunicación enviada. Debe marcar si fue enviado, cancelado o con error');
    }

    public function show(Request $request){
        $request->validate(['contacto_id' => 'required|exists:comunicacion_contactos,contacto_id',
                            'comunicacion_id' => 'required|exists:comunicacion_contactos,comunicacion_id',
                            ]);

        $comcon = ComunicacionContacto::where(['contacto_id' => $request->contacto_id,
                                            'comunicacion_id' => $request->comunicacion_id ])->get()->first();

        return view('base-de-datos.editar-respuesta', ['comcon' => $comcon,]);
    }


    public function updateBlacklist(Request $request){
        $request->validate(['comcon' => 'required|exists:comunicacion_contactos,id']);

        $comcon = ComunicacionContacto::where(['id' => $request->comcon ])->get()->first();

        $contacto = Contacto::where('id',$comcon->contacto->id)->get()->first();
        $contacto->lista_negra = true;
        $contacto->updated_at = Carbon::now();
        $contacto->save();

        return back()->with(['success' => 'Ahora '.$contacto->nombre.' '.$contacto->apellido
                                            .'integra la lista negra en la base de datos']);
    }


    public function update(Request $request){

        $request->validate(['contacto_id' => 'required|exists:comunicacion_contactos,contacto_id',
                            'comunicacion_id' => 'required|exists:comunicacion_contactos,comunicacion_id',
                            'recepcion' => 'required',
                            ]);

        $cc = ComunicacionContacto::where(['contacto_id' => $request->contacto_id,
                                        'comunicacion_id' => $request->comunicacion_id])->get()->first();
        $cc->recepcion = $request->recepcion;
        $cc->updated_at = Carbon::now();
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

    public function updateResp(Request $request){

        $request->validate(['contacto_id' => 'required|exists:comunicacion_contactos,contacto_id',
                            'comunicacion_id' => 'required|exists:comunicacion_contactos,comunicacion_id',
                            'respuesta_resumida' => 'required',
                            'respuesta_valoracion' => 'required|numeric|min:-1|max:1',
                            ]);

        $cc = ComunicacionContacto::where(['contacto_id' => $request->contacto_id,
                                            'comunicacion_id' => $request->comunicacion_id])
                                    ->get()->first();
        $cc->recepcion = 'Respondido';
        $cc->respuesta_resumida = $request->respuesta_resumida;
        $cc->respuesta_valoracion = $request->respuesta_valoracion;
        $cc->usuario_id = Auth::user()->id;
        $cc->updated_at = Carbon::now();
        $cc->save();

        //return $this->show($request)->with('success','Respuesta actualizada');
        return back()->with('success','Respuesta actualizada');

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
