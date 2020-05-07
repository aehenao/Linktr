@extends('layouts.admin')

@section('content')

<div class="container-fluid">
	
	<div class="row">
		<!-- column -->
		<div class="col-lg-6">
			
			<!-- card -->
			<div class="card">
				<div class="card-body">
					<h4 class="card-title m-b-0">Pais</h4>

					<div class="m-t-20">
						<div class="d-flex no-block align-items-center">
							<span>81% Clicks</span>
							<div class="ml-auto">
								<span>125</span>
							</div>
						</div>
						<div class="progress">
							<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 81%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="col-6">
			<div class="bg-dark p-10 text-white text-center">
				<i class="fa fa-user m-b-5 font-16"></i>
				<h5 class="m-b-0 m-t-5">2540</h5>
				<small class="font-light">Total de Visitas</small>
			</div>
		</div>

	</div>
	<!-- column -->

	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title m-b-0">Referido</h5>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th scope="col">URL</th>
						<th scope="col">Host</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Mark</td>
						
					</tr>
					
				</tbody>
			</table>
		</div>

	</div>




</div>

</div>

@endsection