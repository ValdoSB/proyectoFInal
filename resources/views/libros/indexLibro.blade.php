<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>Indice</h1>
    <ul>
        @foreach($libros as $libro)
        <li>
            <a href="{{route('libros.show', $libro)}}">
                {{ $libro->nombre }}
            </a>
            |
            <a href="{{route('libros.edit', $libro)}}">
                Editar
            </a>
            <form action="{{route('libros.destroy', $libro)}}" method="post">
                @csrf
                @method ('delete')
                <input type="submit" value="borrar">
            </form>
        </li>
        @endforeach
    </ul>
</body>
</html>