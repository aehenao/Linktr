@extends('layouts.admin')

@section('subtitle', 'Enlaces directos')

@section('content')

<div class="container-fluid">
	<!-- ============================================================== -->
	<!-- Start Page Content -->
	<!-- ============================================================== -->
	<div class="row">
		<div class="col-12">
			<div class="card table-responsive">
				<div class="card-body">
					<h5 class="card-title m-b-0">Enlaces</h5>
				</div>
				
				<div class="card-body">
					<a href="/link-directo/crear" class="btn btn-info btn-sm">Añadir</a>
				</div>

				<table class="table">

					<thead>
						<tr>
							<th scope="col">Link</th>
							<th scope="col">Destino</th>
							<th scope="col">Tiempo Espera</th>
							<th scope="col">Estado</th>
							<th scope="col">Opciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($datos as $link)
						<tr>
							<td><a href="{{url('/direct/' . $link->enlace)}}">{{url('/direct/' . $link->enlace)}}</a></td>

							<td>{{$link->destino}}</td>

							<td style="text-align: center;"><b>{{$link->tiempo_espera}}s</b></td>

							<td>
								@if($link->estado == 0)
									<span class="badge bg-success text-white">Activo</span>
								@else
									<span class="badge bg-danger text-white">Inactivo</span>
								@endif
							</td>

							<td>
								<form action="{{ url('/link-directo/eliminar/' . $link->id ) }}" method="POST">
									@csrf
									@method('DELETE')

									<a href="{{url('/link-directo/editar/' . $link->id )}}" class="btn btn-outline-success">
										<i class="fas fa-edit"></i>
									</a>

									<button type="submit" class="btn btn-outline-danger">
										<i class="fas fa-trash-alt"></i>
									</button>
								</form>
								
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

@section('scripts')
<script type="text/javascript">
	$(function(){
	
		// $('.btnEliminar').on('click', function(){
		// 	let url = ''
		// })

        //     $.ajax({
        //     	url: url,
        //     	headers: {'X-CSRF-TOKEN': token},
        //     	dataType: 'json',
        //     	type:'PUT',
        //     	data:{'online':data},
        //     	success: function(res){

        //     		toastr.success(res['notification'], 'Exito');
            		
        //     	},
        //     	error: function(ex){
        //     		toastr.error('Ha ocurrido un error interno :( ', 'Error');
        //     	}
            
        //   });

      });


</script>
@endsection