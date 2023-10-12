<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <h1> Listado de Clientes</h1>
    <a href="{{route('usuarios.create')}}">
                CREAR
                </a>
    <ul>
        @foreach ($usuarios as $usuario)
            <li>
                <a href="{{route('usuarios.show',$usuario->id)}}">
                {{ $usuario->clientName}}
                </a>
                <a href="{{route('usuarios.edit',$usuario->id)}}">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EDITAR
                </a>
                <form action="{{ route('usuarios.destroy',$usuario)}}" method="POST">
                    @csrf
                    @method ('DELETE')
                    <input type="submit" value="BORRAR">
                </form>   
            </li>
            @endforeach
    </ul>
</body>
</html>