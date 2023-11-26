<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Models\Libros;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //$clientes = Clientes::all();
        //dd($usuarios);
        //Usuario::where('nombre','Sebastian')->get
        //Usuario::where('nombre','like',$request->consulta)->get
    public function index()
{
    $user = auth()->user();

    // Verifica si hay un usuario autenticado
    if ($user) {
        // Si hay un usuario, obtén los clientes asociados
        $clientes = $user->clientes;
    } else {
        // Si no hay un usuario, inicializa la variable $clientes como una colección vacía
        $clientes = collect();
    }

    return view('clientes.cliente-index', compact('clientes'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $libs = Libros::all();
        return view('clientes/createCliente', compact('libs'));
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
        $cliente->user_id = auth()->user()->id;
        $cliente->save();
        $cliente->libros()->sync($request->input('libro_id', []));
        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($cliente_id)
    {
        //Eager Loading
        $cliente = Clientes::with('libros')->find($cliente_id);
        return view('clientes/clienteShow', compact('cliente'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($cliente_id)
    {
        $cliente = Clientes::with('libros')->find($cliente_id);
        $libs = Libros::all();
        return view('clientes/editCliente', compact('cliente','libs'));
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
        $cliente->libros()->sync($request->input('libro_id', []));
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

