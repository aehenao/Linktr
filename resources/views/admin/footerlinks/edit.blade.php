@extends('layouts.admin')

@section('subtitle', 'Editar Enlace')

@section('styles')
<style type="text/css">
	
	.el-card-avatar img{
		width: 30%;
		max-width: 20% !important;

	}


</style>
@endsection


@section('content')

<div class="container-fluid">
	<!-- ============================================================== -->
	<!-- Start Page Content -->
	<!-- ============================================================== -->
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<form enctype="multipart/form-data" class="form-horizontal" action="{{url('/footers/' . $data->id)}}" method="POST">
					@csrf
					@method('PUT')

					<div class="card-body">

						<div class="form-group row">
							<label for="name" class="col-sm-3 text-right control-label col-form-label">Nombre</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="name" value="{{old('name', $data->name)}}" disabled>
							</div>
						</div>

						<div class="form-group row">
							<label for="link" class="col-sm-3 text-right control-label col-form-label">Enlace</label>
							<div class="col-sm-9">
								<input type="url" class="form-control" name="link" value="{{old('link', $data->link)}}" required>
							</div>
						</div>


						<div class="form-group row">
							<label for="status" class="col-sm-3 text-right control-label col-form-label">Estado</label>
							<div class="col-sm-9">
								<select class="form-control" name="status">
									<option value="on" @if($data->status == 'on') selected @endif>Activo</option>
									<option value="off" @if($data->status == 'off') selected @endif>Inactivo</option>
								</select>
							</div>
						</div>

						<div class="border-top">

							<div class="card-body">
								<button type="submit" class="btn btn-primary">Crear</button>

								<a href="/footers" class="btn btn-warning">Volver</a>

							</div>

						</div>

					</form>
				</div>
			</div>

		</div>

	</div>

	@endsection