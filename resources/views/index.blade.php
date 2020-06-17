
<!doctype html>
<html lang="en">
  <head>
    <title>Gestion de scolarité</title>
    <link rel="shortcut icon" href="/icons/schedule.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
   <!-- <link href="/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all"/>
		   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <link rel="stylesheet" href="/css5/style.css">
    <link href="{{asset('/vendor3/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all"/>
 <!---->
<link href="{{asset('/vendor3/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all"/>
  
  </head>
  <body>
   

		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
        
        
	  		<a href="{{ url('/homeIn')}}"><div class="img bg-wrap text-center py-4" style="background-image: url(/icons/log.jpg);" >
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url(../images/icon/fp.jpg);"></div>
	  				<h3></h3>
	  			</div>
        </div></a>
        
        <ul class="list-unstyled components mb-5">
          
            
           


            <li>
              <a href="{{ route('user.profile', Auth::user()->id) }}"><span class="far fa-user mr-3"></span>  {{ Auth::user()->name }} </a>
            </li>
          @can('IsScolarité')
          <li class="active">
        
            
            <a href="{{ route('retraits.create') }}"><span class="fab fa-wpforms mr-3"></span> Formulaire retrait</a>
          </li>
         
          <li>
            <a href="{{ route('remises.create') }}"><span class="fab fa-wpforms mr-3"></span> Formulaire remise</a>
          </li>
          <li>
            <a href="{{ url('/tableRetrait')}}"><span class="fa fa-clock mr-3"></span> Demande retrait</a>
          </li>
         @endcan
         
         
         @if(Gate::check('IsScolarité') || Gate::check('IsAppogée'))
          <li>
            <a href="{{ url('/tableRemise')}}"><span class="fa fa-thumbs-up mr-3"></span> Demande remise</a>
          </li>
          @endif
       
          <li>
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
            
            <span class="fa fa-sign-out-alt mr-3"></span> {{ __('Déconnexion') }}</a>
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
   <!-- <script src="{{ mix('/js/app.js') }}"></script>-->
  </body>
  </html>


  <!-- 
     <link href="{{asset('/vendor3/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all"/>
    <link href="{{asset('/css1/font-face.css')}}" rel="stylesheet" media="all"/>
    <link href="{{asset('/css5/style.css')}}" rel="stylesheet" media="all"/>
    <link href="{{asset('/vendor3/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all"/>


      fonts font barre  
    <link href="{{asset('/fonts3/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" media="all"/>
 -->
