<!DOCTYPE html>
<html lang="es">

<!-- Mirrored from mannatthemes.com/syntra/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Jun 2018 04:11:58 GMT -->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Mannat Themes">
  <meta name="keyword" content="">

  <title>OGCA</title>

  <!-- Theme icon -->
  <link rel="shortcut icon" href="{{asset('imagenes/logo.png')}}">

  <!-- Theme Css -->


  <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/plugins/bootstrap/css/slidebars.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/plugins/bootstrap/css/icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/plugins/bootstrap/css/menu.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('assets/plugins/bootstrap/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('assets/plugins/bootstrap/css/login/login.css')}}" rel="stylesheet">
</head>

<body class="sticky-header">
  <section class="bg-login">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-sm-12">
          <div class="wrapper-page">
            <div class="account-pages">
              <div class="account-box">
                <div class="card m-b-30">
                  <div class="card-body">
                    <div class="card-title text-center mb-5 mt-3">
                      <img src="{{asset('imagenes/logoinicio.png')}}" width="250" height="50" alt="" class="">
                      <h5 class="mt-3"><b>ACREDITACIÓN</b></h5>
                    </div>
                    <form action="#">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="username" id="username" class="form-control"
                          placeholder="Usuario email" autofocus>
                      </div>
                      <div class="input-group  mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="mdi mdi-account"></i></span>
                        </div>
                        <input type="password" name="password" id="password" class="form-control"
                          placeholder="contraseña CUI">
                      </div>
                      <div class="mb-3">
                        <button class="btn btn-primary" type="submit" style="width: 100%">Iniciar Sesion</button>
                      </div>
                      {{-- <small class="text-danger"><span>Usuario o contraseña incorrecto, vuelva a
                          intentarlo</span></small> --}}
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- jQuery -->
  <script src="{{asset('assets/plugins/bootstrap/js/jquery-3.2.1.min.js')}}"></script>
  <script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
  <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/plugins/bootstrap/js/jquery-migrate.js')}}"></script>
  <script src="{{asset('assets/plugins/bootstrap/js/modernizr.min.js')}}"></script>
  <script src="{{asset('assets/plugins/bootstrap/js/jquery.slimscroll.min.js')}}"></script>
  <script src="{{asset('assets/plugins/bootstrap/js/slidebars.min.js')}}"></script>


  <!--app js-->
  <script src="{{asset('assets/plugins/bootstrap/js/jquery.app.js')}}"></script>
</body>

<!-- Mirrored from mannatthemes.com/syntra/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Jun 2018 04:11:58 GMT -->

</html>