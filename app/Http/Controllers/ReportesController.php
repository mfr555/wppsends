<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comunicacion;
use App\Models\ComunicacionContacto;

class ReportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function comunicaciones($id){
        $com = Comunicacion::where('id', $id)->get()->first();

        //contar los mesajes de cada tipo
        $mensajes['indeterminados'] = ComunicacionContacto::where(['comunicacion_id' => $id,
                                                                   'recepcion' => 'Indeterminado'])
                                                          ->count();
        $mensajes['enviados'] = ComunicacionContacto::where(['comunicacion_id' => $id,
                                                             'recepcion' => 'Enviado'])
                                                    ->count();
        $mensajes['recibidos'] = ComunicacionContacto::where(['comunicacion_id' => $id,
                                                              'recepcion' => 'Recibido'])
                                                     ->count();
        $mensajes['respondidos'] = ComunicacionContacto::where(['comunicacion_id' => $id,
                                                                'recepcion' => 'Respondido'])
                                                       ->count();
        $mensajes['error'] = ComunicacionContacto::where(['comunicacion_id' => $id,
                                                          'recepcion' => 'Error'])
                                                        ->count();
        $mensajes['valoracion1'] = ComunicacionContacto::where(['comunicacion_id' => $id,
                                                               'recepcion' => 'Respondido'])
                                                        ->where('respuesta_valoracion', '>', 0)
                                                        ->count();
        $mensajes['valoracion0'] = ComunicacionContacto::where(['comunicacion_id' => $id,
                                                                'respuesta_valoracion' => 0,
                                                                'recepcion' => 'Respondido'])
                                                         ->count();
        $mensajes['valoracion-1'] = ComunicacionContacto::where(['comunicacion_id' => $id,
                                                            'recepcion' => 'Respondido'])
                                                        ->where('respuesta_valoracion', '<', 0)
                                                        ->count();
        return view('reportes.comunicacion', ['comunicacion' => $com,
                                              'mensajes' => $mensajes]);
    }

}
