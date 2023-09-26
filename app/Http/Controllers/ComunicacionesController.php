<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comunicacion;
use App\Models\Tematica;
use Carbon\Carbon;

class ComunicacionesController extends Controller
{

    public function showPage()
    {
        $tematicas = Tematica::get();
        $tematicasStr = array();
        foreach ($tematicas as $one){
            array_push($tematicasStr, $one->nombre);
        }
        sort($tematicasStr);
        $comunicaciones = Comunicacion::with(['tematica1', 'tematica2', 'tematica3'])->get();
        return view('base-de-datos.comunicaciones',
                        ['tematicas' => $tematicasStr,
                         'comunicaciones' => $comunicaciones,
                        ]);
    }

    public function store(Request $request){
        $request->validate([
            'nombre' => 'required|unique:comunicacions',
            'texto' => 'required|min:20',
            'tematica1' => 'required',
        ]);



        //no repetir temáticas
        if ($request->tematica2 != null){
            $request->validate([
                'tematica2' => 'different:'.$request->tematica2,
            ]);
        }
        if ($request->tematica3 != null){
            $request->validate([
                'tematica3' => 'different:'.$request->tematica1.'|different:'.$request->tematica2,
            ]);
        }


        $com = new Comunicacion;
        $nombre = str_replace(' ','_',$request->nombre);
        $nombre = str_replace(',','',$nombre);
        $nombre = str_replace(';','',$nombre);
        $nombre = str_replace(':','',$nombre);
        $nombre = str_replace('/','',$nombre);
        $nombre = str_replace('\\','',$nombre);
        $nombre = str_replace('@','',$nombre);
        $nombre = str_replace('.','',$nombre);
        $com->nombre = $nombre;
        $com->texto = $request->texto;

        $tem1 = Tematica::where('nombre', $request->tematica1)->get()->first();
        $com->tematica1_id = $tem1->id;

        $tem2 = Tematica::where('nombre', $request->tematica2)->get()->first();
        if (isset($tem2)){
            $com->tematica2_id = $tem2->id;
        }

        $tem3 = Tematica::where('nombre', $request->tematica3)->get()->first();
        if (isset($tem3)){
            $com->tematica3_id = $tem3->id;
        }


        $com->fecha = Carbon::now();

        $com->save();
        return redirect()->route('comunicaciones')->with('success', 'Campaña de comunicación creada correctamente');
    }
}
