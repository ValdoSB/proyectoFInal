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
        //
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
        $libro = new Libros();
        $libro->bookISBNCreateForm = $request->bookISBNCreateForm;
        $libro->bookNameCreateForm = $request->bookNameCreateForm;
        $libro->authorNameCreateForm = $request->authorNameCreateForm;
        $libro->editorialNameCreateForm = $request->editorialNameCreateForm;
        $libro->booksQuantityCreateForm = $request->booksQuantityCreateForm;
        $libro->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Libros $libros)
    {
        //
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
