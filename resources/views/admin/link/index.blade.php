@extends('layouts.admin')

@section('subtitle', 'Links')

@section('content')

<div class="container-fluid">
	<!-- ============================================================== -->
	<!-- Start Page Content -->
	<!-- ============================================================== -->
	<div class="row">
		<div class="col-12">
			<div class="card table-responsive">
				<div class="card-body">
					<h5 class="card-title m-b-0">Redes Sociales</h5>
				</div>
				
				<div class="card-body">
					<a href="/links/new" class="btn btn-info btn-sm">Añadir</a>
				</div>

				<table class="table">

					<thead>
						<tr>
							<th scope="col">Icono</th>
							<th scope="col">Nombre</th>
							<th scope="col">Enlace</th>
							<th scope="col">Online</th>
							<th scope="col">Estado</th>						
							<th scope="col">Opciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($links as $link)
						<tr>
							<td>
								<div class="p-2">
									<img src="{{asset($link->ico)}}" class="rounded-circle" width="40">
								</div>

							</td>

							<td id="name">{{$link->name}}</td>

							<td id="link">{{$link->link}}</td>

							<td>
								<form action="{{ url('/links/' . $link->id ) }}" method="POST">
									@method('PUT')

									<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

									<input id="online" type="checkbox" @if($link->online == 'on') checked @endif data-toggle="toggle" data-size="sm" name="online">
								</form>
							</td>

							<td id="status" value="{{$link->status}}">
								@if($link->status == 'on')
								<b style="color: #15c309">Activo</b>
								@else
								<b style="color: #d20b30">Inactivo</b>
								@endif
							</td>
							
							<td>
								<form action="{{ url('/links/' . $link->id ) }}" method="POST">
									@csrf
									@method('DELETE')

									<a href="{{url('/links/' . $link->id . '/edit')}}" class="btn btn-outline-success">
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
		
		
		$('input:checkbox').change(function(e){

			var form = $(this).parents('form');
			var url = form.attr('action');
			var token = $('#token').val();
			var _urlpath = $(location).attr('href');
			var data;

			
			if($('#online:checked').is(':checked')){
				data = 'on';
			}else{
				data = 'off';
			}

            $.ajax({
            	url: url,
            	headers: {'X-CSRF-TOKEN': token},
            	dataType: 'json',
            	type:'PUT',
            	data:{'online':data},
            	success: function(res){

            		toastr.success(res['notification'], 'Exito');
            		
            	},
            	error: function(ex){
            		toastr.error('Ha ocurrido un error interno :( ', 'Error');
            	}
            
          });

      });

	});

</script>
@endsection