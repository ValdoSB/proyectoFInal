<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$cliente->clientName}}</title>
</head>
<body>
    <h1> Mostrar Cliente: {{$cliente->clientName}}</h1>
    <li> Nombre: {{$cliente->clientName}}</li>   
    <li> CURP: {{$cliente->clientCURP}}</li>
    <li> Edad: {{$cliente->clientAge}}</li>
    <li> Dirección: {{$cliente->clientAddress}}</li>
    <li> Código Postal: {{$cliente->clientPostalCode}}</li>
    <li> Télefono: {{$cliente->clientPhone}}</li>
</body>
</html>
-->
<x-vista-cliente-layout>
	<div class="product-details">
		
		<h1 class="product-title" style="text-align: center;">
		<a  class="rounded-circle" href="{{route('clientes.index')}}" aria-label="Back">
				<i class="fa fa-arrow-left" aria-hidden="true"></i>
			</a>&nbsp;&nbsp;CLIENTE: {{$cliente->clientName}}
		</h1>
		<div class="content mt-5 pt-5">

			<div class="tab-content" id="pills-tabContent" style="text-align: center;">
				<div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
					<h3 class="tab-title">
						
						Información del Cliente

					</h3>
					<table class="table table-bordered product-table">
						<tbody>
							<tr>
								<td>Nombre</td>
								<td>{{$cliente->clientName}}</td>
							</tr>
							<tr>
								<td>CURP</td>
								<td>{{$cliente->clientCURP}}</td>
							</tr>
							<tr>
								<td>Edad</td>
								<td>{{$cliente->clientAge}}</td>
							</tr>
							<tr>
								<td>Dirección</td>
								<td>{{$cliente->clientAddress}}</td>
							</tr>
							<tr>
								<td>Código Postal</td>
								<td>{{$cliente->clientPostalCode}}</td>
							</tr>
							<tr>
								<td>Télefono</td>
								<td>{{$cliente->clientPhone}}</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</x-vista-cliente-layout>