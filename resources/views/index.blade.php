<<<<<<< HEAD
<!doctype html>
=======

<!DOCTYPE html>
>>>>>>> 30e0e9aafc1b5ef24a2a1661af5e147154bfca27
<html lang="en">
  <head>
  	<title>Gestion de scolarité</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css5/style.css">
    <link href="../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all"/>
    
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
    <link rel="stylesheet" href="{{mix('/css/theme.css')}}">

    <link href="../css1/font-face.css" rel="stylesheet" media="all"/>
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all"/>
    <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all"/>
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all"/>
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(/icons/log.jpg);">
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url(../images/icon/fp.jpg);"></div>
	  				<h3></h3>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="{{ route('retraits.create') }}"><span class="fa fa-wpforms mr-3"></span> Formulaire retrait</a>
          </li>
         
          <li>
            <a href="{{ route('remises.create') }}"><span class="fa fa-wpforms mr-3"></span> Formulaire remise</a>
          </li>
          <li>
            <a href="{{ url('/tableRetrait')}}"><span class="fa fa-clock-o mr-3"></span> Demande retrait</a>
          </li>
        
          <li>
            <a href="{{ url('/tableRemise')}}"><span class="fa fa-thumbs-o-up mr-3"></span> Demande remise</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-sign-out mr-3"></span> Déconnexion</a>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5" style="background-color: whitesmoke;">
        @yield('content')  
      </div>
		</div>

    <script src="/js5/jquery.min.js"></script>
    <script src="/js5/popper.js"></script>
    <script src="/js5/bootstrap.min.js"></script>
    <script src="/js5/main.js"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
<<<<<<< HEAD
  </body>
</html>
=======

</body>

</html>
<!-- end document-->

>>>>>>> 30e0e9aafc1b5ef24a2a1661af5e147154bfca27
