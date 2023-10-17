<x-index-layout>
	@foreach($libros as $libro)
	<tr>
		<td class="product-thumb">
			<img width="80px" height="auto" src="{{asset('template/images/libros/libroPrueba.jpg')}}" alt="Aquí va una imagen"></td>
		<td class="product-details">
			<h3 class="title">{{ $libro->nombre }}</h3>
			<span class="add-id"><strong>ISBN:</strong>{{ $libro->ISBN }}</span>
			<span><strong>Autor:</strong>{{ $libro->autor }}</span>
			<span class="add-id"><strong>Cantidad:</strong>{{ $libro->cantidad }}</span>
			<span class="add-id"><strong>Última actualización:</strong>{{ $libro->updated_at }}</span>
		</td>
		<td class="product-category"><span class="categories">{{ $libro->editorial }}</span></td>
		<td class="action" data-title="Action">
			<ul class="list-inline justify-content-center">
				<li class="list-inline-item">
					<a data-toggle="tooltip" data-placement="top" title="View" class="view" href="{{route('libros.show', $libro)}}">
						<i class="fa fa-eye"></i>
					</a>
				</li>
				<li class="list-inline-item">
					<a data-toggle="tooltip" data-placement="top" title="Edit" class="edit" href="{{route('libros.edit', $libro)}}">
						<i class="fa fa-pencil"></i>
					</a>
				</li>
				<form action="{{route('libros.destroy', $libro)}}" method="post">
					<button style="background:transparent;border:none;outline:none">
						@csrf
						@method ('delete')
						<li class="list-inline-item">
							<a data-toggle="tooltip" data-placement="top" title="Delete" class="delete">
								<i class="fa fa-trash"></i>
							</a>
						</li>
					</button>
				</form>
			</ul>
		</td>
	</tr>
	@endforeach
</x-index-layout>