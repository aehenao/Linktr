@extends('layouts.admin')

@section('subtitle', 'Mi Perfil')

@section('styles')
<style type="text/css">

	.el-card-avatar img{
		width: 20%;
		height: auto;
		max-height: 200px;
		border-radius: 30%;
		margin: 5px auto 20px;
		border-style: none;

	}

	.el-card-item{
		align-items: center;
		margin-left: auto;
		margin-right: auto;
		padding: 5px;
		display: block;
	}



</style>
@endsection

@section('content')

<div class="container-fluid">

	<div class="row">

		<div class="col-lg-12 col-md-6">
			<div class="card">

				<center>

					<div class="el-card-item">
						<div class="el-card-avatar el-overlay-1"> 
							
							<img src="@if(isset($data->img)) {{asset($data->img)}} @else 
							{{asset('assets/images/users/1.jpg')}} @endif" alt="user">


						</div>
						<div class="el-card-content">
							<h4 class="m-b-0">{{$data->user}}</h4>
						</div>
					</div>

				</center>



				<form class="form-horizontal" action="{{url('/profile/' . $data->id)}}" method="POST" enctype="multipart/form-data">
					@csrf
					@method('PUT')

					<div class="card-body">

						<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

						<div class="form-group row">
							<label for="name" class="col-sm-3 text-right control-label col-form-label">Nombre</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="name" name="name" value="{{old('name',$data->name)}}" >
							</div>
						</div>

						<div class="form-group row">
							<label for="user" class="col-sm-3 text-right control-label col-form-label">Usuario</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="user" name="user" value="{{old('user',$data->user)}}">
							</div>
						</div>

						<div class="form-group row">
							<label for="img" class="col-sm-3 text-right control-label col-form-label">Foto</label>
							<div class="col-sm-9">
								<div class="custom-file">
									<input type="file" id="img" class="custom-file-input" name="img" accept="image/png, .jpeg, .jpg, image/gif" required>

									<label class="custom-file-label" for="img">Seleccione un archivo...</label>

								</div>
							</div>
						</div>

						<div class="form-group row">
							<label for="email" class="col-sm-3 text-right control-label col-form-label">Email</label>
							<div class="col-sm-9">
								<input type="email" class="form-control" id="email" name="email" value="{{old('email',$data->email)}}">
							</div>
						</div>

						<div class="form-group row">
							<label for="password" class="col-sm-3 text-right control-label col-form-label">Contraseña</label>
							<div class="col-sm-9">
								<input type="password" class="form-control" name="password" id="password" >
							</div>
						</div>

						<div class="border-top">

							<div class="card-body">
								<button type="submit" class="btn btn-success">Actualizar
								</button>

							</div>

						</div>

					</form>

				</div>

			</div>

@endsection
