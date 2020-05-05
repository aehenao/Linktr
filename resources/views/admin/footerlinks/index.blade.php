@extends('layouts.admin')

@section('subtitle', 'Pie de Pagina')

@section('content')

<div class="container-fluid">
	<!-- ============================================================== -->
	<!-- Start Page Content -->
	<!-- ============================================================== -->
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title m-b-0">Redes Sociales</h5>
				</div>				

				<table class="table">

					<thead>
						<tr>
							<th scope="col">Nombre</th>
							<th scope="col">Enlace</th>
							<th scope="col">Estado</th>
							<th scope="col">Opciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($links as $link)
						<tr>
							
							<td >{{$link->name}}</td>
							<td>{{$link->link}}</td>
							<td>
								@if($link->status == 'on')
								<b style="color: #15c309">Activo</b>
								@else
								<b style="color: #d20b30">Inactivo</b>
								@endif
							</td>

							<td>
								

								<a href="{{url('/footers/' . $link->id . '/edit')}}" class="btn btn-outline-success">
									<i class="fas fa-edit"></i>

								</a>

								
							</td>
							
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			
		</div>
	</div>

</div>

@endsection