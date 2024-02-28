<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;
use App\Models\Departamento;
use App\Models\Lista;

class ListaController extends Controller
{
    public function index() {
        $listas = Lista::all();
        return view('listas.index', compact('listas'));
    }

    public function create(){
        $departamentos = Departamento::all();
        return view('listas.create', compact('departamentos'));
    }

    public function store(Request $request){
        if (Gate::allows('edit', 'App\\Models\Lista')){
            $request->validate([
                'lema' => 'required',
                'agrupacion' => 'required',
                'numero' => 'required|min:1',
                'estado_del_numero' => ['required', Rule::in(['Solicitado', 'Concedido', 'Rechazado', 'Renunciado'])],
            ]);
            $lista = new Lista();
            $lista->lema = $request->lema;
            $lista->agrupacion = $request->agrupacion;
            $lista->numero = $request->numero;
            //Si no se selecciona un departamento, es nacional
            if (isset($request->departamento_id)){
                $request->validate([
                    'departamento_id' => 'required|exists:departamentos,id'
                ]);
                $lista->departamento_id = $request->departamento_id;
            }
            $lista->departamento_id = $request->departamento_id;
            $lista->estado_del_numero = $request->estado_del_numero;
            $lista->notas = $request->notas;
            $lista->save();
            return redirect()->route('listas');
        } else {
            return back()->withErrors('No tienes permisos para realizar esta acción');
        }
    }

    public function edit($id){
        $departamentos = Departamento::all();
        $lista = Lista::find($id);
        return view('listas.edit', compact('lista', 'departamentos'));
    }

    public function update(Request $request){
        if (Gate::allows('edit', 'App\\Models\Lista')){
            $request->validate([
                'id' => 'required|exists:listas,id',
                'agrupacion' => 'required',
                'estado_del_numero' => ['required', Rule::in(['Solicitado', 'Concedido', 'Rechazado', 'Renunciado'])],
            ]);
            $lista = Lista::find($request->id);
            $lista->agrupacion = $request->agrupacion;
            $lista->estado_del_numero = $request->estado_del_numero;
            $lista->notas = $request->notas;
            $lista->save();
            return redirect()->route('listas');
        } else {
            return back()->withErrors('No tienes permisos para realizar esta acción');
        }
    }

    public function destroy(Lista $lista)
    {
        //
    }
}
