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
				<form enctype="multipart/form-data" class="form-horizontal" action="{{url('/links/' . $data->id)}}" method="POST">
					@csrf
					@method('PUT')

					<div class="card-body">

						<div class="form-group row">
							<label for="name" class="col-sm-3 text-right control-label col-form-label">Nombre</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="name" value="{{old('name', $data->name)}}" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="link" class="col-sm-3 text-right control-label col-form-label">Enlace</label>
							<div class="col-sm-9">
								<input type="url" class="form-control" name="link" value="{{old('link', $data->link)}}" required>
							</div>
						</div>


						<div class="form-group row">

								<label for="dff" class="col-sm-3 text-right control-label col-form-label">Icono

									<div class="el-card-item">
										<div class="el-card-avatar el-overlay-1"> <img src="{{asset($data->ico)}}" alt="user" />
										</div>
									</div>

								</label>						
						
								<div class="custom-file col-sm-6">
									<input type="file" class="custom-file-input" name="ico" accept="image/png, .jpeg, .jpg, image/gif">
									<label class="custom-file-label" for="ico">Seleccione un archivo...</label>

								</div>
							
						</div>

						<div class="form-group row">
							<label for="preview" class="col-sm-3 text-right control-label col-form-label">Ventana Emergente

								<div class="el-card-item">
										<div class="el-card-avatar el-overlay-1"> <img src="{{asset($data->preview)}}" alt="user" />
										</div>
									</div>

							</label>

							<div class="col-sm-6">
								<div class="custom-file">
									<input type="file" class="custom-file-input" name="preview" accept="image/png, .jpeg, .jpg, image/gif">
									<label class="custom-file-label" for="preview">Seleccione un archivo...</label>

								</div>
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

								<a href="/links" class="btn btn-warning">Volver</a>

							</div>

						</div>

					</form>
				</div>
			</div>

		</div>

	</div>

	@endsection