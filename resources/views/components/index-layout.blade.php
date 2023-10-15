<x-general-layout>
	<div class="col-lg-30">
		<section class="page-title">
			<div class="container">
				<div class="row">
					<div class="col-md-8 offset-md-2 text-center">
						<h3>Lista de libros</h3>
					</div>
				</div>
			</div>
		</section>
		<div class="widget dashboard-container my-adslist">
			<table class="table table-responsive product-dashboard-table">
				<thead>
					<tr>
						<th>Imagen</th>
						<th>Producto</th>
						<th class="text-center">Editorial</th>
						<th class="text-center">Acción</th>
					</tr>
				</thead>
				<tbody>
					{{ $slot }}
				</tbody>
			</table>
		</div>
	</div>
</x-general-layout>