<x-formulario-layout>
    <form action="{{route('libros.store')}}" method="post">
        @csrf
        <fieldset class="p-4">
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-6 py-2">
                        <input 
                            type="text" 
                            placeholder="Nombre *" 
                            class="form-control"
                            id="bookName" 
                            name="bookNameCreateForm" 
                            value="{{old('bookNameCreateForm')}}"
                            required>
                    </div>
                    @error('bookNameCreateForm')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-lg-6 py-2">
                        <input 
                            type="text" 
                            placeholder="ISBN *" 
                            class="form-control"
                            id="bookISBN" 
                            name="bookISBNCreateForm"
                            value="{{old('bookISBNCreateForm')}}"
                            required>
                    </div>
                    @error('bookISBNCreateForm')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-lg-6 py-2">
                        <input 
                            type="text" 
                            placeholder="Autor *" 
                            class="form-control"
                            id="authorName" 
                            name="authorNameCreateForm"
                            value="{{old('authorNameCreateForm')}}"
                            required>
                    </div>
                    @error('authorNameCreateForm')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-lg-6 py-2">
                        <input 
                            type="text" 
                            placeholder="Editorial *" 
                            class="form-control"
                            id="editorialName" 
                            name="editorialNameCreateForm" 
                            value="{{old('editorialNameCreateForm')}}"
                            required>
                    </div>
                    @error('editorialNameCreateForm')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-lg-6 py-2">
                        <input 
                            type="text" 
                            placeholder="Cantidad *" 
                            class="form-control"
                            id="booksQuantity" 
                            name="booksQuantityCreateForm" 
                            value="{{old('booksQuantityCreateForm')}}"
                            required>
                    </div>
                    @error('booksQuantityCreateForm')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="btn-grounp">
                <button type="submit" class="btn btn-primary mt-2">Enviar</button>
            </div>
        </fieldset>
    </form>
</x-formulario-layout>