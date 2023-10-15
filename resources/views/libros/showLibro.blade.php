<x-show-libro-layout>
    <div class="col-lg-8">
		<div class="product-details">
			<h1 class="product-title">{{ $libro->nombre }}</h1>
			<div class="product-meta">
				<ul class="list-inline">
					<li class="list-inline-item"><i class="fa fa-user-o"></i> Por: {{ $libro->autor }}</li>
					<li class="list-inline-item"><i class="fa fa-folder-open-o"></i> Editorial: {{ $libro->editorial }}</li>
				</ul>
			</div>

			<!-- product slider -->
			<div class="product-slider">
				<div class="product-slider-item my-4" data-image="{{asset('images/libros/libroprueba.jpg')}}">
					<img class="img-fluid w-100" src="{{asset('images/libros/libroprueba.jpg')}}" alt="product-img">
				</div>
				<div class="product-slider-item my-4" data-image="{{asset('images/libros/libroprueba2.jpg')}}">
					<img class="d-block img-fluid w-100" src="{{asset('images/libros/libroprueba2.jpg')}}" alt="Second slide">
				</div>
				<div class="product-slider-item my-4" data-image="{{asset('images/libros/libroprueba3.avif')}}">
					<img class="d-block img-fluid w-100" src="{{asset('images/libros/libroprueba3.avif')}}" alt="Third slide">
				</div>
			</div>
			<!-- product slider -->
			<div class="content mt-5 pt-5">
				<ul class="nav nav-pills  justify-content-center" id="pills-tab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home"
							aria-selected="true">Detalles del libro</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile"
							aria-selected="false">Especificaciones</a>
					</li>
				</ul>
				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
						<h3 class="tab-title">Descripción o sinopsis del libro</h3>
						<p>Aquí va una descripción o sinopsis del producto.</p>
					</div>
					<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
						<h3 class="tab-title">Especificaciones</h3>
						<table class="table table-bordered product-table">
							<tbody>
								<tr>
									<td>ISBN</td>
									<td>{{ $libro->ISBN }}</td>
								</tr>
								<tr>
									<td>Edición</td>
									<td>Futuro atributo de edición</td>
								</tr>
								<tr>
									<td>Géneros</td>
									<td>Futuro atribuo de géneros</td>
								</tr>
								<tr>
									<td>Fecha de publicación</td>
									<td>Futuro atributo de fecha de publicación</td>
								</tr>
                                <tr>
									<td>Cantidad</td>
									<td>{{ $libro->cantidad }}</td>
								</tr>
								<tr>
									<td>Última actualización</td>
									<td>{{ $libro->updated_at }}</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-4">
		<div class="sidebar">
			<div class="widget price text-center">
				<h4>Precio</h4>
				<p>Futuro atributo de precio.</p>
			</div>
			<!-- Rate Widget -->
			<div class="widget rate">
				<!-- Heading -->
				<h5 class="widget-header text-center">Futuro atributo
					<br>
					de rating</h5>
				<!-- Rate -->
				<div class="starrr"></div>
			</div>
			<!-- Safety tips widget -->
			<div class="widget disclaimer">
				<h5 class="widget-header">Tips para tu seguridad</h5>
				<ul>
					<li>- Utiliza un punto de encuentro público</li>
					<li>- Verifica el libro antes de comprarlo</li>
					<li>- Paga solo después de recibir el libro</li>
				</ul>
			</div>
		</div>
	</div>
</x-show-libro-layout>