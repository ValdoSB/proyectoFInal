<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Models\Libros;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libros = Libros::all();

        return view('libros/indexLibro', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$clientes = Clientes::all();  Manejar clientes
        //return view('libros/createLibro', compact('clientes'));
        return view('libros/createLibro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'bookISBNCreateForm' => ['min_digits:10', 'max_digits:13'],
            'bookNameCreateForm' => ['regex:/^[A-Za-z0-9 .]+$/i', 'min:8'],
            'authorNameCreateForm' => ['regex:/^[\pL\s\-]+$/u', 'min:8'],
            'editorialNameCreateForm' => ['regex:/^[A-Za-z0-9 .-]+$/i', 'min:3'],
            'booksQuantityCreateForm' => ['numeric','min_digits:1', 'max_digits:4'],
        ]);

        $libro = new Libros();
        $libro->ISBN = $request->bookISBNCreateForm;
        $libro->nombre = $request->bookNameCreateForm;
        $libro->autor = $request->authorNameCreateForm;
        $libro->editorial = $request->editorialNameCreateForm;
        $libro->cantidad = $request->booksQuantityCreateForm;
        $libro->save();

        return redirect()->route('libros.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Libros $libro)
    {
        return view('libros.showLibro', compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Libros $libro)
    {
        return view('libros.editLibro', compact('libro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Libros $libro)
    {
        $request->validate([
            'bookISBNCreateForm' => ['min_digits:10', 'max_digits:13'],
            'bookNameCreateForm' => ['regex:/^[A-Za-z0-9 .]+$/i', 'min:8'],
            'authorNameCreateForm' => ['regex:/^[\pL\s\-]+$/u', 'min:8'],
            'editorialNameCreateForm' => ['regex:/^[A-Za-z0-9 .-]+$/i', 'min:3'],
            'booksQuantityCreateForm' => ['numeric','min_digits:1', 'max_digits:4'],
        ]);

        $libro->ISBN = $request->bookISBNCreateForm;
        $libro->nombre = $request->bookNameCreateForm;
        $libro->autor = $request->authorNameCreateForm;
        $libro->editorial = $request->editorialNameCreateForm;
        $libro->cantidad = $request->booksQuantityCreateForm;
        $libro->save();

        return redirect()->route('libros.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Libros $libro)
    {
        $libro->delete();
        
        return redirect()->route('libros.index');
    }
}
