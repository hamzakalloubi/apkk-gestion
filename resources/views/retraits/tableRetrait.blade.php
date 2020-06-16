@extends('index')
@section('content')
  

<head>
	<title>Table V04</title>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="/icons/schedule.png" />
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="/images3/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor3/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<!--<link rel="stylesheet" type="text/css" href="/fonts3/font-awesome-4.7.0/css/font-awesome.min.css">
	<link href="{{asset('/vendor3/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all"/>-->
	
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
@if(session()->has('delete'))
  <div class="alert alert-danger">
{{session()->get('delete')}}
</div>

@endif
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<!-- Small button groups (default and split) -->
				<div class="row justify-content-end" style="background-color: whitesmoke;">
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

				
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column11">CNE</th>	
									<th class="cell100 column12">Nom</th>
									<th class="cell100 column13">Prénom</th>
									<th class="cell100 column14">Apogée</th>
									<th class="cell100 column15">Diplome</th>
									<th class="cell100 column16">Type retrait</th>
									<th class="cell100 column17">Situation</th>			
									<th class="cell100 column18">Modification</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								@foreach($retraits as $retrait)
								<tr class="row100 body">
									<td class="cell100 column11">{{$retrait->demande->CNE}}</td>
									<td class="cell100 column12">{{$retrait->demande->Nom}}</td>
									<td class="cell100 column13">{{$retrait->demande->Prénom}}</td>								
									<td class="cell100 column14">{{$retrait->demande->Apogée}}</td>
									<td class="cell100 column15">{{$retrait->demande->diplome}}</td>
									<td class="cell100 column16">{{$retrait->Type_retrait}}</td>
									<td class="cell100 column17">{{$retrait->demande->situation}}</td>
									<td class="cell100 column18">

									<form  style="display: inline-block;"  action="{{route('retraits.edit',['retrait'=>$retrait->id, 'demande'=>$retrait->demande->id])}}">
											@csrf

											<button  type="submit" class="btn btn-lg" style="background-color:transparent;padding: 0;" title="Modifier">
												<i class="far fa-edit" style="color: black;"></i> 
											 </button>
										  </form>



										  <form  style="display: inline-block;" method="POST" action="{{route('retraits.valid',$retrait->demande->id)}}">
											@csrf

											<button  type="submit" class="btn btn-lg" style="background-color:transparent;padding: 0;" title="Validée">
												<i class="far fa-check-square" style="color: green;"></i> 
											 </button>
										  </form>

										 
										  <form id="delete-form" style="display: inline-block;" method="POST" action="{{route('retraits.refuse',$retrait->demande->id)}}">
											@csrf
											@method('PUT')
										
											<button  type="submit" class="btn btn-lg" style="background-color:transparent; padding: 0;" title="Refusée">
												<i class="far fa-times-circle" style="color: black;"></i> 
											 </button>
											
										  </form>
										


											<form id="delete-form" style="display: inline-block;" method="POST" action="{{route('retraits.destroy',['retrait'=>$retrait->id, 'demande'=>$retrait->demande->id])}}">
												@csrf
												@method('DELETE')
												<button  type="submit" class="btn btn-lg" style="background-color:transparent; padding: 0;" title="suprimmé">
													<i class="far fa-trash-alt"  style="color: red;"></i> 
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
		</div>
	</div>


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