<x-formulario-registro-layout>
    <form action="{{route('clientes.store')}}" method="post" encType="multipart/form-data">
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
                    
                    @error('clientPhone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-lg-6 py-2">
                    <label for="archivo"> Subir foto de perfil:</label>
                        <input type="file" name="archivo">
                    </div>
                </div>
            </div>
            <div >
                    <select name="libro_id[]" multiple>
                        @foreach ($libs as $lib)
                            <option value="{{ $lib->id }}" @selected( array_search($lib->id, old('libro_id') ?? []) !== false )>
                                {{ $lib->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>
            <div class="btn-grounp">
                <button type="submit" class="btn btn-primary mt-2">Registrar</button>
            </div>
        </fieldset>
    </form>
</x-formulario-registro-layout>