@extends('layouts.admin')

@section('subtitle', 'Links')

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
				
				<div class="card-body">
					<a href="/links/new" class="btn btn-info btn-sm">Añadir</a>
				</div>

				<table class="table">

					<thead>
						<tr>
							<th scope="col">Nombre</th>
							<th scope="col">Enlace</th>
							<th scope="col">Estado</th>
							<th scope="col">Icono</th>
							<th scope="col">Opciones</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td >1</td>
							<td>Mark</td>
							<td>Otto</td>
							<td>ico</td>
							<td>
								<form action="{{ url('/uo/' ) }}" method="POST">
									@csrf
									@method('DELETE')

									<a class="btn btn-outline-success">
										<i class="fas fa-edit"></i>

									</a>

									<button type="button" class="btn btn-outline-danger">
										<i class="fas fa-trash-alt"></i>
									</button>
								</form>
								
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			
		</div>
	</div>

</div>

@endsection