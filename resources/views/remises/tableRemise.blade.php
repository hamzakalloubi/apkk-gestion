@extends('index')
@section('content')
  

<head>
	<title>Table V04</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="/images3/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor3/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts3/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor3/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor3/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor3/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/css3/util.css">
	<link rel="stylesheet" type="text/css" href="/css3/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<!-- Small button groups (default and split) -->
					<div class="row justify-content-end">
						<div class="col-2">
							<div class="btn-group mb-2">
								<button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Affichage
								</button>
								<div class="dropdown-menu">
									<div class="dropdown-item">
										Pret
									  </div>
									  <div class="dropdown-item">
										En cour
									  </div>
									  <div class="dropdown-item">
										Refusé
									  </div>
								</div>
							</div>
						</div>
					</div>

					
					<div class="row">
						<div class="col-12">
						<div class="table100 ver1 m-b-110">
							<div class="table100-head">
								<table>
									<thead>
										<tr class="row100 head">
											<th class="cell100 column1">CNE</th>	
											<th class="cell100 column2">Nom</th>
											<th class="cell100 column3">Prénom</th>
											<th class="cell100 column4">Apogée</th>										
											<th class="cell100 column5">Situation</th>
											<th class="cell100 column6">Edit</th>
										</tr>
									</thead>
								</table>
							</div>

							<div class="table100-body js-pscroll">
								<table>
									<tbody>
										@foreach($remises as $remise)
										<tr class="row100 body">
											<td class="cell100 column1">{{$remise->demande->CNE}}</td>
											<td class="cell100 column2">{{$remise->demande->Nom}}</td>
											<td class="cell100 column3">{{$remise->demande->Prénom}}</td>								
											<td class="cell100 column4">{{$remise->demande->Apogée}}</td>
											<td class="cell100 column5">{{$remise->demande->situation}}</td>
										<td class="cell100 column6">
											<a style="margin:6px" class="btn btn-success" href="{{route('remises.edit',['remise'=>$remise->id, 'demande'=>$remise->demande->id])}}">
											</a>
											


											<form id="delete-form" method="POST" action="{{route('remises.destroy',['remise'=>$remise->id, 'demande'=>$remise->demande->id])}}">
												@csrf
												@method('DELETE')
											
												<div class="form-group">
												  <input type="submit" class="btn btn-danger" value="Delete">
												</div>
											  </form>
										</td>


										@endforeach

										
									</tbody>
								</table>

							</div>
						</div>
						</div>
					</div>
				
			</div>
		</div>
	</div>
</body>
<!--===============================================================================================-->	
	<script src="/vendor3/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor3/bootstrap/js/popper.js"></script>
	<script src="/vendor3/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor3/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor3/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="/js3/main.js"></script>




@endsection