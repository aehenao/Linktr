@extends('layouts.admin')

@section('subtitle', 'Crear enlace directo')

@section('content')

<div class="container-fluid">
	<!-- ============================================================== -->
	<!-- Start Page Content -->
	<!-- ============================================================== -->
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<form class="form-horizontal" action="{{url('/link-directo/crear')}}" method="POST" enctype="multipart/form-data">
					@csrf

					<div class="card-body">

						<div class="form-group row">
							<label for="alias" class="col-sm-3 text-right control-label col-form-label">Alias</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="alias" placeholder="OnlyFans" value="{{ old('alias') }}" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="destino" class="col-sm-3 text-right control-label col-form-label">Destino</label>
							<div class="col-sm-9">
								<input type="url" class="form-control" name="destino" placeholder="www.onlyfans.com" value="{{ old('destino') }}" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="titulo" class="col-sm-3 text-right control-label col-form-label">Titulo</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="titulo"  value="@LittleCory" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="subtitulo" class="col-sm-3 text-right control-label col-form-label">Subtitulo</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="subtitulo"  value="Model WebCam" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="status" class="col-sm-3 text-right control-label col-form-label">Tiempo de Espera</label>
							<div class="col-sm-9">
								<select class="form-control" name="tiempo_espera">
									<option value="1">1s</option>
									<option value="2">2s</option>
									<option value="3">3s</option>
									<option value="4">4s</option>
									<option value="5">5s</option>
                                    <option value="10">10s</option>
                                    <option value="15">15s</option>
                                    <option value="20">20s</option>
								</select>
							</div>
						</div>

                        <div class="form-group row">
							<label for="preview" class="col-sm-3 text-right control-label col-form-label">Imagen de Fondo</label>
							<div class="col-sm-9">
								<div class="custom-file">
    								<input type="file" class="form-control-file" id="exampleFormControlFile1" name="imagen" accept="image/png, .jpeg, .jpg, image/gif" required>

								</div>
							</div>
						</div>

						<div class="form-group row">
							<label for="status" class="col-sm-3 text-right control-label col-form-label">Estado</label>
							<div class="col-sm-9">
								<select class="form-control" name="estado">
									<option value="0">Activo</option>
									<option value="1">Inactivo</option>
								</select>
							</div>
						</div>

						<div class="border-top">

							<div class="card-body">
								<button type="submit" class="btn btn-primary">Crear</button>

								<a href="/link-directo" class="btn btn-warning">Volver</a>

							</div>

						</div>

					</form>
				</div>
			</div>

		</div>

	</div>

	@endsection