
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Kit PRO by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/material-kit-pro" />
  <!--  Social tags      -->
  <meta name="keywords" content="bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, material, material kit, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit, premium bootstrap 4 ui kit, premium template, bootstrap 4 template">
  <meta name="description" content="Start Your Development With A Badass Bootstrap 4 UI Kit inspired by Material Design">
  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="Material Kit Pro by Creative Tim">
  <meta itemprop="description" content="Start Your Development With A Badass Bootstrap 4 UI Kit inspired by Material Design">
  <meta itemprop="image" content="../../../s3.amazonaws.com/creativetim_bucket/products/46/original/opt_mkp_thumbnail.jpg">
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Material Kit Pro by Creative Tim">
  <meta name="twitter:description" content="Start Your Development With A Badass Bootstrap 4 UI Kit inspired by Material Design">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="../../../s3.amazonaws.com/creativetim_bucket/products/46/original/opt_mkp_thumbnail.jpg">
  <!-- Open Graph data -->
  <meta property="fb:app_id" content="655968634437471">
  <meta property="og:title" content="Material Kit Pro by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="../presentation.html" />
  <meta property="og:image" content="../../../s3.amazonaws.com/creativetim_bucket/products/46/original/opt_mkp_thumbnail.jpg" />
  <meta property="og:description" content="Start Your Development With A Badass Bootstrap 4 UI Kit inspired by Material Design" />
  <meta property="og:site_name" content="Creative Tim" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="{{asset('assetsfront/maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css')}}">
  <!-- CSS Files -->
  <link href="{{asset('assetsfront/files/assets/css/material-kit.mind1f1.css?v=2.2.0')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('assetsfront/files/assets/demo/demo.css')}}" rel="stylesheet" />
  <link href="{{asset('assetsfront/files/assets/demo/vertical-nav.css')}}" rel="stylesheet" />
  <!-- Google Tag Manager -->
  
  <!-- End Google Tag Manager -->
</head>

<body class="login-page sidebar-collapse">
  <!-- Extra details for Live View on GitHub Pages -->
  {{-- <nav class="navbar navbar-color-on-scroll navbar-transparent bg-warning   fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="#">
            <img src="https://reactnative.dev/img/header_logo.svg" width="30px" alt="">
          
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse ">
        <ul class="navbar-nav ml-auto ">
         
          
          <li class="dropdown nav-item">
            <a href="{{url('/login')}}" class=" nav-link" >
              <i class="material-icons">fingerprint</i> Signin
            </a>
          </li>
          <li class="button-container nav-item iframe-extern">
            <a href="{{url('/register')}}" class="btn  btn-info  btn-round btn-block">
              <i class="material-icons">input</i> Signup
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav> --}}
  <div class="page-header header-filter"  style="background-image: url('{{asset('assetsfront/files/assets/img/bg7.jpg')}}'); background-size: cover; background-position: top center;">
    @yield('content')
    <footer class="footer mt-5">
      <div class="container">
        <nav class="float-left">
          <ul>
            <li>
              <a href="https://www.creative-tim.com/">
                Signals Tim
              </a>
            </li>
            <li>
              <a href="https://creative-tim.com/presentation">
                About Us
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright float-right">
          &copy;
          <script>
            document.write(new Date().getFullYear());
          </script>, made with <i class="material-icons">favorite</i> by
          <a href="#" target="_blank">Signals</a> for a better web.
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="{{asset('assetsfront/files/assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assetsfront/files/assets/js/core/popper.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assetsfront/files/assets/js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('assetsfront/files/assets/js/plugins/moment.min.js')}}"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="{{asset('assetsfront/files/assets/js/plugins/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>

  <script src="{{asset('assetsfront/files/assets/js/plugins/nouislider.min.js" type="text/javascript')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="{{asset('assetsfront/buttons.github.io/buttons.js')}}"></script>
  <!--	Plugin for Sharrre btn -->
  <script src="{{asset('assetsfront/files/assets/js/plugins/jquery.sharrre.js')}}" type="text/javascript"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="{{asset('assetsfront/files/assets/js/plugins/bootstrap-tagsinput.js')}}"></script>

  <script src="{{asset('assetsfront/files/assets/js/plugins/bootstrap-selectpicker.js')}}" type="text/javascript"></script>
  
  <script src="{{asset('assetsfront/files/assets/js/plugins/jasny-bootstrap.min.js')}}" type="text/javascript"></script>
  <!--	Plugin for Small Gallery in Product Page -->
  <script src="{{asset('assetsfront/files/assets/js/plugins/jquery.flexisel.js')}}" type="text/javascript"></script>
  <!-- Plugins for presentation and navigation  -->
  <script src="{{asset('assetsfront/files/assets/demo/modernizr.js')}}" type="text/javascript"></script>
  <script src="{{asset('assetsfront/files/assets/demo/vertical-nav.js')}}" type="text/javascript"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="{{asset('assetsfront/buttons.github.io/buttons.js')}}"></script>
  <!-- Js With initialisations For Demo Purpose, Don't Include it in Your Project -->
  <script src="{{asset('assetsfront/files/assets/demo/demo.js')}}" type="text/javascript"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('assetsfront/files/assets/js/material-kit.mind1f1.js?v=2.2.0')}}" type="text/javascript"></script>
</body>


</html>

