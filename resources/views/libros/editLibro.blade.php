<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Libro</title>
</head>
<body>
    <!-- <div class="nav">
        <a class="navAnchor" href="index.html">Sobre mí</a>
        <a class="navAnchor" href="formulario.html">Formulario</a>
    </div> -->
    <main>
        <h1>Nuevo Libro</h1>

        <h2>Ingrese los datos necesarios:</h2>
        <form action="{{route('libros.update', $libro)}}" method="post">
            
            @csrf
            @method('patch')
            <fieldset>
                <legend>ISBN</legend>
                <label for="bookISBN">ISBN: </label>
                <input 
                    id="bookISBN" 
                    type="number" 
                    name="bookISBNCreateForm" 
                    value="{{$libro->ISBN}}"
                    required>
            </fieldset>
            @error('bookISBNCreateForm')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <fieldset>
                <legend>Nombre</legend>
                <label for="bookName">Nombre del libro: </label>
                <input 
                    id="bookName" 
                    type="text" 
                    name="bookNameCreateForm" 
                    value="{{$libro->nombre}}"
                    required>
            </fieldset>
            @error('bookNameCreateForm')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <fieldset>
                <legend>Autor</legend>
                <label for="authorName">Nombre del autor: </label>
                <input 
                    id="authorName" 
                    type="text" 
                    name="authorNameCreateForm"
                    value="{{$libro->autor}}"
                    required>
            </fieldset>
            @error('authorNameCreateForm')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <fieldset>
                <legend>Editorial</legend>
                <label for="editorialName">Editorial: </label>
                <input 
                    id="editorialName" 
                    type="text" 
                    name="editorialNameCreateForm" 
                    value="{{$libro->editorial}}"
                    required>
            </fieldset>
            @error('editorialNameCreateForm')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <fieldset>
                <legend>Cantidad</legend>
                <label for="booksQuantity">Cantidad de copias: </label>
                <input 
                    id="booksQuantity" 
                    type="number" 
                    name="booksQuantityCreateForm" 
                    value="{{$libro->cantidad}}"
                    required>
            </fieldset>
            @error('booksQuantityCreateForm')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <button type="submit">Agregar</button>
        </form>
    </main>
</body>
</html>