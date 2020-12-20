@extends('layouts.admin')

@section('subtitle', 'Editar enlace directo')

@section('content')

<div class="container-fluid">
	<!-- ============================================================== -->
	<!-- Start Page Content -->
	<!-- ============================================================== -->
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<form class="form-horizontal" action="{{url('/link-directo/editar/' . $link->id)}}" method="POST" enctype="multipart/form-data">
					@csrf
                    @method('PUT')

					<div class="card-body">

						<div class="form-group row">
							<label for="alias" class="col-sm-3 text-right control-label col-form-label">Alias</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="alias" placeholder="OnlyFans" value="{{ old('alias', $link->enlace) }}" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="destino" class="col-sm-3 text-right control-label col-form-label">Destino</label>
							<div class="col-sm-9">
								<input type="url" class="form-control" name="destino" placeholder="www.onlyfans.com" value="{{ old('destino', $link->destino) }}" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="titulo" class="col-sm-3 text-right control-label col-form-label">Titulo</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="titulo" value="{{ old('titulo', $link->titulo) }}" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="subtitulo" class="col-sm-3 text-right control-label col-form-label">Subtitulo</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="subtitulo" value="{{ old('subtitulo', $link->subtitulo) }}" required>
							</div>
						</div>

						<div class="form-group row">
							<label for="status" class="col-sm-3 text-right control-label col-form-label">Tiempo de Espera</label>
							<div class="col-sm-9">
								<select class="form-control" name="tiempo_espera">
									<option value="5" @if($link->tiempo_espera == 5) selected @endif >5s</option>
                                    <option value="10" @if($link->tiempo_espera == 10) selected @endif>10s</option>
                                    <option value="15" @if($link->tiempo_espera == 15) selected @endif>15s</option>
                                    <option value="20" @if($link->tiempo_espera == 20) selected @endif>20s</option>
								</select>
							</div>
						</div>

                        <div class="form-group row">
							<label for="preview" class="col-sm-3 text-right control-label col-form-label">Imagen de Fondo</label>
							<div class="col-sm-9">
								<div class="custom-file">
									<input type="file" class="custom-file-input" name="imagen" accept="image/png, .jpeg, .jpg, image/gif" >
									<label class="custom-file-label" for="preview">Seleccione una imagen...</label>

								</div>
							</div>
						</div>

						<div class="form-group row">
							<label for="status" class="col-sm-3 text-right control-label col-form-label">Estado</label>
							<div class="col-sm-9">
								<select class="form-control" name="estado">
									<option value="0" @if($link->estado == 0) selected @endif >Activo</option>
									<option value="1" @if($link->estado == 1) selected @endif >Inactivo</option>
								</select>
							</div>
						</div>

						<div class="border-top">

							<div class="card-body">
								<button type="submit" class="btn btn-primary">Guardar</button>

								<a href="/link-directo" class="btn btn-warning">Volver</a>

							</div>

						</div>

					</form>
				</div>
			</div>

		</div>

	</div>

	@endsection