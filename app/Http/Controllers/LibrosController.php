<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return view('libros/indexLibro');
        return view('libros/createLibro');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('libros/createLibro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$request->validate([]);

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
    public function show(Libros $libros)
    {
        return view('libros.showLibro');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Libros $libros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Libros $libros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Libros $libros)
    {
        //
    }
}
