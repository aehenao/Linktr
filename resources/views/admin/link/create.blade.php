@extends('layouts.admin')

@section('subtitle', 'Crear Enlace')

@section('content')

<div class="container-fluid">
	<!-- ============================================================== -->
	<!-- Start Page Content -->
	<!-- ============================================================== -->
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<form class="form-horizontal" action="{{url('/links/create')}}" method="POST" enctype="multipart/form-data">
					@csrf

					<div class="card-body">

						<div class="form-group row">
							<label for="name" class="col-sm-3 text-right control-label col-form-label">Nombre</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="name" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="link" class="col-sm-3 text-right control-label col-form-label">Enlace</label>
							<div class="col-sm-9">
								<input type="url" class="form-control" name="link" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="dff" class="col-sm-3 text-right control-label col-form-label">Icono</label>
							<div class="col-sm-9">
								<div class="custom-file">
									<input type="file" class="custom-file-input" name="ico" accept="image/png, .jpeg, .jpg, image/gif" required>
									<label class="custom-file-label" for="ico">Seleccione un archivo...</label>

								</div>
							</div>
						</div>

						{{-- <div class="form-group row">
							<label for="preview" class="col-sm-3 text-right control-label col-form-label">Ventana Emergente</label>
							<div class="col-sm-9">
								<div class="custom-file">
									<input type="file" class="custom-file-input" name="preview" accept="image/png, .jpeg, .jpg, image/gif" required>
									<label class="custom-file-label" for="preview">Seleccione un archivo...</label>

								</div>
							</div>
						</div> --}}

						<div class="form-group row">
							<label for="status" class="col-sm-3 text-right control-label col-form-label">Estado</label>
							<div class="col-sm-9">
								<select class="form-control" name="status">
									<option value="on">Activo</option>
									<option value="off">Inactivo</option>
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