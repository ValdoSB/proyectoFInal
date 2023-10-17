<!--<!DOCTYPE html>
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
-->
<x-formulario-registro-layout>
    <form action="{{route('clientes.store')}}" method="post">
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
                            value="{{ old('clientCURP')}}" 
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
                            value="{{ old('clientName')}}"
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
                            value="{{ old('clientAge')}}"
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
                            value="{{ old('clientAddress')}}" 
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
                            value="{{ old('clientPostalCode')}}"  
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
                            value="{{ old('clientPhone')}}"  
                            required>
                    </div>
                    @error('clientPhone')
                        <div class="alert alert-danger">{{ $message }}</div>
                     @enderror
                </div>
            </div>
            <div class="btn-grounp">
                <button type="submit" class="btn btn-primary mt-2">Registrar</button>
            </div>
        </fieldset>
    </form>
</x-formulario-registro-layout>