<!doctype html>
<html lang="en">
  <head>
    <title>Gestion de scolarité</title>
    <link rel="shortcut icon" href="/icons/schedule.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css5/style.css">
    <link href="../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all"/>
    <link rel="stylesheet" href="/css5/style.css">
    <link href="{{asset('/vendor3/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all"/>
 <!---->
<link href="{{asset('/vendor3/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all"/>
  
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" style="background: #649173; ">
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
          
          <li>
            <a href="{{ url('/tableRemise')}}"><span class="fa fa-thumbs-o-up mr-3"></span> Demande remise</a>
          </li>
          <li>
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
            
            <span class="fa fa-sign-out mr-3"></span> {{ __('Déconnexion') }}</a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
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
 
  </body>
</html>


<!--<style>
    .ayoub{
        background: #649173;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #DBD5A4, #649173);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #DBD5A4, #649173); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
      </style>-->