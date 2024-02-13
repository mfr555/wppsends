<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        if (Gate::allows('view', 'App\\Models\User')) {
            $users = User::get();
            return view('user.index')->with('users', $users);
        } else {
            return back()->withErrors('No tiene permisos para ver los usuarios');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Auth::check()) {
            $user = User::find($id);
            if (isset($user)) {
                return view('user.show')->with('user', $user);
            } else {
                return back()->withErrors('Usuario no encontrado');
            }
            return view('user.show')->with('user', $user);
        } else {
            return redirect()->route('login.show');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){
        return "Función no desarrollada";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Actualizar la contraseña
     */
    public function updatePassword(Request $request)
    {
        if (Auth::check() && Auth::user()->id == $request->id) {
            $request->validate([
                'password' => 'required|confirmed|min:6',
            ]);
            $user = Auth::user();
            $user->password = Hash::make($request->password);
            $user->save();
            return back()->with('success', 'Contraseña actualizada correctamente');
        } else {
            return back()->withErrors('No puede actualizar la contraseña de otro usuario');
        }
    }

}
