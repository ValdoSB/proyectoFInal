<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$cliente->clientName}}</title>
</head>
<body>
    <h1> Mostrar Cliente: {{$cliente->clientName}}</h1>
    <li> Nombre: {{$cliente->clientName}}</li>   
    <li> CURP: {{$cliente->clientCURP}}</li>
    <li> Edad: {{$cliente->clientAge}}</li>
    <li> Dirección: {{$cliente->clientAddress}}</li>
    <li> Código Postal: {{$cliente->clientPostalCode}}</li>
    <li> Télefono: {{$cliente->clientPhone}}</li>
</body>
</html>