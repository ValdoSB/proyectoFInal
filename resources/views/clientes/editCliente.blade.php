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