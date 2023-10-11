<!-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>Indice</h1>
    <ul>
        @foreach($libros as $libro)
        <li>
            <a href="{{route('libros.show', $libro)}}">
                {{ $libro->nombre }}
            </a>
            |
            <a href="{{route('libros.edit', $libro)}}">
                Editar
            </a>
            <form action="{{route('libros.destroy', $libro)}}" method="post">
                @csrf
                @method ('delete')
                <input type="submit" value="borrar">
            </form>
        </li>
        @endforeach
    </ul>
</body>
</html> -->

<x-index-layout>
    @foreach($libros as $libro)
    <div class="col-lg-12">
        <div class="trending-ads-slide">
            <div class="col-sm-12 col-lg-4">
                <!-- product card -->
                <div class="product-item bg-light">
                    <div class="card">
                        <div class="thumb-content">
                        <!-- <div class="price">$200</div> -->
                        <a href="single.html">
                        <img
                            class="card-img-top img-fluid"
                            src="images/products/products-1.jpg"
                            alt="Card image cap"
                        />
                        </a>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="{{route('libros.show', $libro)}}">{{ $libro->nombre }}</a>
                        </h4>
                        <ul class="list-inline product-meta">
                        <li class="list-inline-item">
                            <a href="single.html"><i class="fa fa-folder-open-o"></i>{{ $libro->autor }}</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="category.html"><i class="fa fa-calendar"></i>{{ $libro->cantidad }}</a>
                        </li>
                        </ul>
                            <p class="card-text">
                                Aquí puede ir una sinopsis.
                            </p>
                        <div class="product-ratings">
                        <ul class="list-inline">
                            <li class="list-inline-item selected">
                                <i class="fa fa-star"></i>
                            </li>
                            <li class="list-inline-item selected">
                                <i class="fa fa-star"></i>
                            </li>
                            <li class="list-inline-item selected">
                                <i class="fa fa-star"></i>
                            </li>
                            <li class="list-inline-item selected">
                                <i class="fa fa-star"></i>
                            </li>
                            <li class="list-inline-item">
                                <i class="fa fa-star"></i>
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</x-index-layout>