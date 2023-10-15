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
                            required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 py-2">
                        <input 
                            type="text" 
                            placeholder="ISBN *" 
                            class="form-control"
                            id="bookISBN" 
                            name="bookISBNCreateForm" 
                            required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 py-2">
                        <input 
                            type="text" 
                            placeholder="Autor *" 
                            class="form-control"
                            id="authorName" 
                            name="authorNameCreateForm" 
                            required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 py-2">
                        <input 
                            type="text" 
                            placeholder="Editorial *" 
                            class="form-control"
                            id="editorialName" 
                            name="editorialNameCreateForm" 
                            required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 py-2">
                        <input 
                            type="number" 
                            placeholder="Cantidad *" 
                            class="form-control"
                            id="booksQuantity" 
                            name="booksQuantityCreateForm" 
                            required>
                    </div>
                </div>
            </div>
            <div class="btn-grounp">
                <button type="submit" class="btn btn-primary mt-2">Enviar</button>
            </div>
        </fieldset>
    </form>
</x-formulario-layout>