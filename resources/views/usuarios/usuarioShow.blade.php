<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$usuario->clientName}}</title>
</head>
<body>
    <h1> Mostrar Cliente: {{$usuario->clientName}}</h1>
    <li> Nombre: {{$usuario->clientName}}</li>   
    <li> CURP: {{$usuario->clientCURP}}</li>
    <li> Edad: {{$usuario->clientAge}}</li>
    <li> Dirección: {{$usuario->clientAddress}}</li>
    <li> Código Postal: {{$usuario->clientPostalCode}}</li>
    <li> Télefono: {{$usuario->clientPhone}}</li>
</body>
</html>