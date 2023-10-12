<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::all();
        //dd($usuarios);
        //Usuario::where('nombre','Sebastian')->get
        //Usuario::where('nombre','like',$request->consulta)->get
        return view('usuarios/usuario-index', compact('usuarios'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios/createUsuario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

        ]);
        $usuario = new Usuario();
        $usuario->clientCURP = $request->clientCURP;
        $usuario->clientName = $request->clientName;
        $usuario->clientAge = $request->clientAge;
        $usuario->clientAddress = $request->clientAddress;
        $usuario->clientPostalCode = $request->clientPostalCode;
        $usuario->clientPhone = $request->clientPhone;
        $usuario->save();
        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        return view('usuarios/usuarioShow', compact('usuario'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        return view('usuarios/editUsuario', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([

        ]);
        $usuario->clientCURP = $request->clientCURP;
        $usuario->clientName = $request->clientName;
        $usuario->clientAge = $request->clientAge;
        $usuario->clientAddress = $request->clientAddress;
        $usuario->clientPostalCode = $request->clientPostalCode;
        $usuario->clientPhone = $request->clientPhone;
        $usuario->save();
        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }
}
