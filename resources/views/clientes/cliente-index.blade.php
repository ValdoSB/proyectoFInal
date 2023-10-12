<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <h1> Listado de Clientes</h1>
    <a href="{{route('clientes.create')}}">
                CREAR
                </a>
    <ul>
        @foreach ($clientes as $cliente)
            <li>
                <a href="{{route('clientes.show',$cliente->id)}}">
                {{ $cliente->clientName}}
                </a>
                <a href="{{route('clientes.edit',$cliente->id)}}">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EDITAR
                </a>
                <form action="{{ route('clientes.destroy',$cliente)}}" method="POST">
                    @csrf
                    @method ('DELETE')
                    <input type="submit" value="BORRAR">
                </form>   
            </li>
            @endforeach
    </ul>
</body>
</html>