<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon.png')}}">
    <title>OGCA</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{asset('css/colors/blue.css')}}" id="theme" rel="stylesheet">

    {{-- tablas --}}

    <link rel="stylesheet" href="{{asset('tablas/css/dataTables.bootstrap4.min.css')}}">
</head>

<body class="fix-header card-no-border">
    {{-- BLOQUEAR COPIAR CODIGO XD --}}
    {{-- <body class="fix-header card-no-border" oncontextmenu="return false" onkeydown="return false"> --}}

    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="">

                        <!-- PARA IR AL INICIO -->
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            {{-- <img src="{{asset('assets/images/logo-icon.png')}}" alt="homepage" class="dark-logo" />
                            --}}
                            <img src="" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="{{asset('assets/images/logo-light-icon.png')}}" alt="homepage"
                                class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                            <!-- dark Logo text -->
                            <img src="{{asset('assets/images/logo-light-text.png')}}" alt="homepage"
                                class="dark-logo" />
                            <!-- Light Logo text -->
                            <img src="{{asset('assets/images/logo-light-text.png')}}" class="light-logo"
                                alt="homepage" /></span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a
                                class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark"
                                href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a
                                class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="../assets/images/users/1.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="../assets/images/users/login.jpg" alt="user">
                                            </div>
                                            <div class="u-text">
                                                <h4> @auth
                                                    {{auth()->user()->name}}
                                                    @endauth</h4>
                                                <p class="text-muted">Rol : {{auth()->user()->rol}}</p>
                                                <p class="text-muted"> {{auth()->user()->email}}</p>
                                                <p class="text-muted">{{auth()->user()->telefono}}</p>
                                                <a href="" class="btn btn-rounded btn-danger btn-sm">Ver Perfil</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-user"></i> Mi perfil</a></li>
                                    <li><a href="#"><i class="ti-wallet"></i> Mi Balance</a></li>
                                    <li><a href="#"><i class="ti-email"></i> Bandeja de Entrada</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-settings"></i>Configuración de cuenta</a></li>
                                    <li role="separator" class="divider"></li>
                                    <!-- -->
                                    {{-- <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('CERRAR SESION') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form> --}}
                                    <!-- -->
                                    <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                            {{ __('CERRAR SESION') }} <i class="  fa fa-power-off"> </i></a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="{{asset('assets/images/users/profile.png')}}" alt="user" />
                        <!-- this is blinking heartbit-->
                        <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span>
                        </div>
                    </div>
                    <!-- User profile text-->
                    <div class="profile-text">
                        <h5>Oficina General de Calidad y Acreditación</h5>
                        <!-- <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="mdi mdi-settings"></i></a> -->
                        <!-- <a href="app-email.html" class="" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a> -->
                        <a href="" class="" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>

                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <!-- <li class="nav-small-cap">PERSONAL</li> -->

                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                                    class="mdi mdi-arrange-send-backward"></i><span class="hide-menu">menu</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('acreditacion')}}">   Acreditación</a></li>
                                <li><a href="{{asset('errors')}}">   Licenciamiento</a></li>
                                <li><a href="{{asset('errors')}}">   SGC</a></li>
                                <!-- submenu-->
                                <li> <a class="has-arrow waves-effect waves-green" href="#" aria-expanded="false">
                                        <i class=" icon-chart"></i><span class="hide-menu">  REPORTES</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a class="icon-crop" href="{{route('reporte')}}">   PROGRAMAS</a></li>
                                        <li><a class="fa fa-cubes" href="">Dimencion</a></li>
                                        <li><a class="icon-pie-chart " href=""> Factores</a></li>
                                        <li><a class="fa fa-bar-chart-o" href="{{route('estandartotal')}}">  Estandares</a>
                                        </li>
                                    </ul>
                                    
                                </li>
<li><a class="has-arrow waves-effect waves-green" href="#" aria-expanded="false">
    <i class="fa fa-folder"></i><span class="hide-menu">   Documentos</span></a>
    <ul aria-expanded="false" class="collapse">
       <li><a class=" fa fa-address-card" href="{{route('certificados')}}">  Certificados</a></li>
        <li><a class="fa fa-file" href="{{route('certificados')}}">    Constancias</a></li>
    </ul>
</li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <!-- <h3 class="text-themecolor">Home</h3> -->
                </div>
                <div class="col-md-7 align-self-center">

                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="{{route('acreditacion')}}">INICIO</a></li>
                        <!-- <li class="breadcrumb-item">pages</li>
                        <li class="breadcrumb-item active">Animation</li> -->
                    </ol>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->



                {{-- <main>
                    <div class="m-1"> --}}
                @yield('name')
                {{-- </div>
                </main> --}}



                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2019 Admin by OGCA
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>

    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('js/waves.js')}}"></script>
    <script src="{{asset('js/jsapi.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{asset('assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('js/custom.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{asset('assets/plugins/styleswitcher/jQuery.style.switcher.js')}}"></script>

    {{-- jquery-datatables-editable --}}


    <script src="{{asset('assets/plugins/jquery-datatables-editable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('assets/plugins/tiny-editable/mindmup-editabletable.js')}}"></script>
    <script src="{{asset('assets/plugins/tiny-editable/numeric-input-example.js')}}"></script>


</body>
@include('modal')

<!-- Mirrored from themedesigner.in/demo/admin-press/main/pages-blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Sep 2019 15:17:19 GMT -->
{{-- @include('modal') --}}

</html>