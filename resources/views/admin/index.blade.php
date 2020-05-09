@extends('layouts.admin')

@section('styles')
<style type="text/css">
	
	.mes{

	}

</style>
@endsection


@section('content')

<div class="container-fluid">
	
	<div class="row">
		<!-- column -->
		<div class="col-lg-6">
			
			<!-- card -->
			<div class="card">
				<div class="card-body">
					<h4 class="card-title m-b-0">Clics Enlaces</h4>
					@foreach($vSocial as $social)
					<div class="m-t-20">
						<div class="d-flex no-block align-items-center">
							<span>{{bcdiv(($social->cant * 100 )/count($clics),1,1)}}%  <b>{{$social->name}}</b></span>
							<div class="ml-auto">
								<span>{{$social->cant}}</span>
							</div>
						</div>
						<div class="progress">
							<div class="progress-bar progress-bar-striped" role="progressbar" style="width:
							{{ ($social->cant * 100 )/count($clics) }}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
					@endforeach

				</div>
			</div>

			<div class="bg-dark p-10 text-white text-center">
				<i class="fa fa-user m-b-5 font-16"></i>
				<h5 class="m-b-0 m-t-5">{{count($visitsTotal)}}</h5>
				<small class="font-light">Total de Visitas</small>
			</div>
		</div>

		<div class="col-lg-6">
			
			<!-- card -->
			<div class="card">
				<div class="card-body">
					<h4 class="card-title m-b-0">Estadistica x Paises</h4>
					@foreach($vCountry as $country)
					<div class="m-t-20">
						<div class="d-flex no-block align-items-center">
							<span>{{bcdiv(($country->cant * 100 )/count($visitsTotal),1,1)}}%  <b>{{$country->country}}</b></span>
							<div class="ml-auto">
								<span>{{$country->cant}}</span>
							</div>
						</div>
						<div class="progress">
							<div class="progress-bar progress-bar-striped" role="progressbar" style="width:
							{{ ($country->cant * 100 )/count($visitsTotal) }}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
					@endforeach

				</div>
			</div>

			<!-- card -->
			@if(count($visitsMonth) >= 1)
			<div class="card">
				<div class="card-body">
					<h4 class="card-title m-b-0" >Clics Enlaces <small style="color: green"><b>{{date("F")}}</b></small></h4>
					@foreach($visitsMonth as $social)
					<div class="m-t-20">
						<div class="d-flex no-block align-items-center">
							<span>{{bcdiv(($social->cant * 100 )/count($clics),1,1)}}%  <b>{{$social->name}}</b></span>
							<div class="ml-auto">
								<span>{{$social->cant}}</span>
							</div>
						</div>
						<div class="progress">
							<div class="progress-bar progress-bar-striped" role="progressbar" style="width:
							{{ ($social->cant * 100 )/count($clics) }}%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
					@endforeach

				</div>
			</div>
			@endif

			
		</div>

	</div>


	<div class="row">

		<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title m-b-0">Referido</h5>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Referido por</th>
						<th scope="col">IP del Visitante</th>
						<th scope="col">Continente <small>(visitante)</small></th>
						<th scope="col">Ciudad <small>(visitante)</small></th>
					</tr>
				</thead>
				<tbody>
					@foreach($visits as $visit)
					<tr>
						<th>{{$visit->refer}}</th>
						<td>{{$visit->ip}}</td>
						<td>{{$visit->country}}</td>
						<td>{{$visit->city}}</td>
						
					</tr>
					@endforeach
					
				</tbody>
			</table>
			<div class="card-body">
				{{ $visits->links() }}
			</div>
		</div>


	</div>

	

	</div>




</div>

</div>

@endsection