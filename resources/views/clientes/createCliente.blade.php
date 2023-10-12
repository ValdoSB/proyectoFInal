<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Cliente</title>
</head>
<body>
    <main>
        <h1>Nuevo Cliente</h1>

        <h2>Ingrese los datos del nuevo cliente:</h2>
        <form action="{{ route('clientes.store')}}" method="post" id="createUserForm">
            
            @csrf
            <fieldset>
                <legend>CURP</legend>
                <label for="clientCURP">CURP: </label>
                <input 
                    id="clientCURP" 
                    type="text" 
                    name="clientCURP" 
                    placeholder="AAGDSGSGD0303HNL"
                    required>
            </fieldset>
            @error('clientCURP')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <fieldset>
                <legend>Nombre</legend>
                <label for="clientName">Nombre Completo: </label>
                <input 
                    id="clientName" 
                    type="text" 
                    name="clientName" 
                    placeholder="Pedro Lopez" 
                    required>
            </fieldset>
            @error('clientName')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <fieldset>
                <legend>Edad</legend>
                <label for="clientAge">Edad: </label>
                <input 
                    id="clientAge" 
                    type="number" 
                    name="clientAge"
                    placeholder="77" 
                    required>
            </fieldset>
            @error('clientAge')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <fieldset>
                <legend>Direccion:</legend>
                <label for="clientAddress">Direccion: </label>
                <input 
                    id="clientAddress" 
                    type="text" 
                    name="clientAddress" 
                    placeholder="Calle Averno 23"
                    required>
            </fieldset>
            @error('clientAddress')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <fieldset>
                <legend>Código Postal</legend>
                <label for="clientPC">Ingrese código postal: </label>
                <input 
                    id="clientPC" 
                    type="text" 
                    name="clientPostalCode" 
                    placeholder="45190"
                    required>
            </fieldset>
            @error('clientPostalCode')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <fieldset>
                <legend>Número de Telefono</legend>
                <label for="clientPhone">Ingrese un número de contacto: </label>
                <input 
                    id="clientPhone" 
                    type="text" 
                    name="clientPhone" 
                    placeholder="3312345678"
                    required>
            </fieldset>
            @error('clientPhone')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button type="submit">Agregar</button>
        </form>
    </main>
</body>
</html>