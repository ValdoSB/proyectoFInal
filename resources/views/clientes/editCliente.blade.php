<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edicion de Cliente</title>
</head>
<body>
    <main>
        <h1>Cambio de Cliente</h1>

        <h2>Ingrese los nuevos datos del cliente:</h2>
        <form action="{{ route('clientes.update',$cliente->id)}}" method="post" id="createUserForm">
            @method('PATCH')
            @csrf
            <fieldset>
                <legend>CURP</legend>
                <label for="clientCURP">CURP: </label>
                <input 
                    id="clientCURP" 
                    type="text" 
                    name="clientCURP"
                    value="{{$cliente->clientCURP}}" 
                    
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
                    value="{{$cliente->clientName}}" 
                    
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
                    value="{{$cliente->clientAge}}"
                    
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
                    value="{{$cliente->clientAddress}}" 
                    
                    required>
            </fieldset>
            @error('clientAddress')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <fieldset>
                <legend>Código Postal</legend>
                <label for="userEmail">Ingrese código postal: </label>
                <input 
                    id="userEmail" 
                    type="text" 
                    name="clientPostalCode" 
                    value="{{$cliente->clientPostalCode}}"
                    
                    required>
            </fieldset>
            @error('clientPostalCode')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <fieldset>
                <legend>Télefono</legend>
                <label for="userPassword">Ingrese número de contacto: </label>
                <input 
                    id="userPassword" 
                    type="text" 
                    name="clientPhone" 
                    value="{{$cliente->clientPhone}}"
                    
                    required>
            </fieldset>
            @error('clientPhone')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button type="submit">Modificar</button>
        </form>
    </main>
</body>
</html>
-->
<x-formulario-edit-layout>
        <form action="{{ route('clientes.update',$cliente->id)}}" method="post" id="createUserForm">
        @method('PATCH')
        @csrf
        <fieldset class="p-4">
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-6 py-2">
                    <label for="clientCURP">CURP: </label>
                        <input 
                            type="text" 
                            placeholder="CURP" 
                            class="form-control"
                            id="clientCURP" 
                            name="clientCURP" 
                            value="{{$cliente->clientCURP}}"
                            required>
                    </div>
                    @error('clientCURP')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-lg-6 py-2">
                    <label for="clientName">Nombre: </label>
                        <input 
                            type="text" 
                            placeholder="Nombre" 
                            class="form-control"
                            id="clientName" 
                            name="clientName" 
                            value="{{$cliente->clientName}}"
                            required>
                    </div>
                    @error('clientName')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-lg-6 py-2">
                    <label for="clientAge">Edad: </label>
                        <input 
                            type="number" 
                            placeholder="Edad" 
                            class="form-control"
                            id="clientAge" 
                            name="clientAge" 
                            value="{{$cliente->clientAge}}"
                            required>
                    </div>
                    @error('clientAge')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-lg-6 py-2">
                    <label for="clientAddress">Domicilio: </label>
                        <input 
                            type="text" 
                            placeholder="Domicilio" 
                            class="form-control"
                            id="clientAddress" 
                            name="clientAddress" 
                            value="{{$cliente->clientAddress}}"
                            required>
                    </div>
                    @error('clientAddress')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-lg-6 py-2">
                    <label for="clientPostalCode">Código Postal: </label>
                        <input 
                            type="text" 
                            placeholder="Código Postal" 
                            class="form-control"
                            id="clientPostalCode" 
                            name="clientPostalCode" 
                            value="{{$cliente->clientPostalCode}}"
                            required>
                    </div>
                    @error('clientPostalCode')
                         <div class="alert alert-danger">{{ $message }}</div>
                     @enderror
                </div>
                <div class="row">
                    <div class="col-lg-6 py-2">
                    <label for="clientPhone">Teléfono: </label>
                        <input 
                            type="text" 
                            placeholder="Número de Contacto" 
                            class="form-control"
                            id="clientPhone" 
                            name="clientPhone" 
                            value="{{$cliente->clientPhone}}"
                            required>
                    </div>
                    @error('clientPhone')
                        <div class="alert alert-danger">{{ $message }}</div>
                     @enderror
                </div>
            </div>
            <div class="btn-grounp">
                <button type="submit" class="btn btn-primary mt-2">Modificar</button>
            </div>
        </fieldset>
    </form>
</x-formulario-edit-layout>