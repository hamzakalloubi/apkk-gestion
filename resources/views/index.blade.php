<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="iewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Gestion</title>

    <!-- Fontfaces CSS-->
    <link href="/css1/font-face.css" rel="stylesheet" media="all"/>
    <link href="/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all"/>
    <link href="/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all"/>
    <link href="/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all"/>

    <!-- Bootstrap CSS-->
    <link href="/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all"/>
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
    <link rel="stylesheet" href="{{mix('/css/theme.css')}}">

    <!-- Vendor CSS-->
    <link href="/vendor/animsition/animsition.min.css" rel="stylesheet" media="all"/>
    <link href="/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all"/>
    <link href="/vendor/wow/animate.css" rel="stylesheet" media="all"/>
    <link href="/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all"/>
    <link href="/vendor/slick/slick.css" rel="stylesheet" media="all"/>
    <link href="/vendor/select2/select2.min.css" rel="stylesheet" media="all"/>
    <link href="/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all"/>
    <link href="/vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all"/>

    <!-- Main CSS-->
    <link href="/css1/theme.css" rel="stylesheet" media="all"/>
    <link rel="shortcut icon" href="/icons/schedule.png" />

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2" data-background-color="brown" >
            <div class="logo">
                <a href="#">
                    <img  style="" src="/icons/fp-tetouan.png" alt="fp-tetouan" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="/images/icon/fp.jpg" alt="fsjeste" />
                    </div>
                    <h4 class="name">fsjeste</h4>
                    <a href="#">Déconnexion</a>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">


                            <li class="active has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fab fa-wpforms"></i>Formulaire
                                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                                </a>
                                <ul class="list-unstyled navbar__sub-list js-sub-list">
                                    <li>
                                        <a href="{{ route('retraits.create') }}">
                                            <i class="fab fa-wpforms"></i>Retrait </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('remises.create') }}">
                                            <i class="fab fa-wpforms"></i>Remise</a>
                                    </li>
                                </ul>



                        <li class="active has-sub">

                            <a href="{{ url('/tableRemise')}}">
                                <i class="fas fa-check-square"></i>Les demandes remise</a>

                    </li>

                    <li class="active has-sub">

                        <a href="{{ url('/tableRetrait')}}">
                            <i class="fas fa-sync"></i>Les demandes retrait</a>
                </li>

                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <img src="/icons/fp-tetouan.png" alt="fp-tetouan" style="margin:auto; width: 30%"/>
                                </a>
                            </div>
                            <div class="header-button2">
                                <div class="header-button-item js-item-menu">
                                    <i class="zmdi zmdi-search"></i>
                                    <div class="search-dropdown js-dropdown">
                                        <form action="">
                                            <input class="au-input au-input--full au-input--h65" type="text" placeholder="Search for datas &amp; reports..." />
                                            <span class="search-dropdown__icon">
                                                <i class="zmdi zmdi-search"></i>
                                            </span>
                                        </form>
                                    </div>
                                </div>
                                
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                                <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                
            </aside>
            <!-- END HEADER DESKTOP-->




            <!-- Formulaire -->

         <div >
                                <!-- RECENT REPORT 2-->
                                @yield('content')

         </div>

    </div>

    <!-- Jquery JS-->
    <script src="/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="/vendor/slick/slick.min.js">
    </script>
    <script src="/vendor/wow/wow.min.js"></script>
    <script src="/vendor/animsition/animsition.min.js"></script>
    <script src="/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="/vendor/select2/select2.min.js">
    </script>
    <script src="/vendor/vector-map/jquery.vmap.js"></script>
    <script src="/vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="/vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="/vendor/vector-map/jquery.vmap.world.js"></script>

    <!-- Main JS-->
    <script src="/js1/main.js"></script>
    <script src="{{ mix('/js/app.js') }}"></script>

</body>

</html>
<!-- end document-->
