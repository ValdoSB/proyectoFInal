<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Clientes::all();
        //dd($usuarios);
        //Usuario::where('nombre','Sebastian')->get
        //Usuario::where('nombre','like',$request->consulta)->get
        return view('clientes/cliente-index', compact('clientes'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes/createCliente');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'clientName' => ['regex:/^[\pL\s\-]+$/u', 'min:8'],
            'clientCURP' => ['alpha_num:ascii','min:18'],
            'clientAge' => 'integer|between:1,100',
            'clientAddress' => ['regex:/^[a-zA-Z0-9\s]+$/'],
            'clientPostalCode' => 'numeric',
            'clientPhone' => ['numeric','min_digits:7'],
        ]);
        $cliente = new Clientes();
        $cliente->clientCURP = $request->clientCURP;
        $cliente->clientName = $request->clientName;
        $cliente->clientAge = $request->clientAge;
        $cliente->clientAddress = $request->clientAddress;
        $cliente->clientPostalCode = $request->clientPostalCode;
        $cliente->clientPhone = $request->clientPhone;
        $cliente->save();
        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Clientes $cliente)
    {
        return view('clientes/clienteShow', compact('cliente'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clientes $cliente)
    {
        return view('clientes/editCliente', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clientes $cliente)
    {
        $request->validate([
            'clientName' => ['regex:/^[\pL\s\-]+$/u'],
            'clientCURP' => ['alpha_num:ascii'],
            'clientAge' => 'integer|between:1,100',
            'clientAddress' => ['regex:/^[a-zA-Z0-9\s]+$/'],
            'clientPostalCode' => 'numeric',
            'clientPhone' => 'numeric',
        ], ['clientName.regex' => 'Nombre no jala']);

        $cliente->clientCURP = $request->clientCURP;
        $cliente->clientName = $request->clientName;
        $cliente->clientAge = $request->clientAge;
        $cliente->clientAddress = $request->clientAddress;
        $cliente->clientPostalCode = $request->clientPostalCode;
        $cliente->clientPhone = $request->clientPhone;
        $cliente->save();
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clientes $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index');
    }
}

