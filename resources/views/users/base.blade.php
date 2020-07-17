
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Signals 
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
  <meta itemprop="image" content="../../s3.amazonaws.com/creativetim_bucket/products/46/original/opt_mkp_thumbnail.jpg">
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Material Kit Pro by Creative Tim">
  <meta name="twitter:description" content="Start Your Development With A Badass Bootstrap 4 UI Kit inspired by Material Design">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="../../s3.amazonaws.com/creativetim_bucket/products/46/original/opt_mkp_thumbnail.jpg">
  <!-- Open Graph data -->
  <meta property="fb:app_id" content="655968634437471">
  <meta property="og:title" content="Material Kit Pro by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="presentation.html" />
  <meta property="og:image" content="../../s3.amazonaws.com/creativetim_bucket/products/46/original/opt_mkp_thumbnail.jpg" />
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
  <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
  
    <script>
        var OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
            appId: "2d15824e-78ec-487f-bef5-aad661f2e476",
            notifyButton: {
                enable: true,
            },
            });
        });
    </script>

</head>

<body class="presentation-page sidebar-collapse">

    
    @include('users.navbar')

    @yield('user-content')
    
    <footer class="footer footer-white">
        <div class="container">
            <a class="footer-brand" href="#">
                <img src="https://reactnative.dev/img/header_logo.svg" width="30px" alt="">
                Signals 
            </a>
        <ul class="pull-center">
            <li>
            <a href="#" target="_blank">
                Signals Tim
            </a>
            </li>
            <li>
            <a href="#" target="_blank">
                About Us
            </a>
            </li>
            <li>
            <a href="#" target="_blank">
                Blog
            </a>
            </li>
        </ul>
        <ul class="social-buttons float-right">
            <li>
            <a href="#" target="_blank" class="btn btn-just-icon btn-link btn-twitter">
                <i class="fa fa-twitter"></i>
            </a>
            </li>
            <li>
            <a href="#" target="_blank" class="btn btn-just-icon btn-link btn-facebook">
                <i class="fa fa-facebook"></i>
            </a>
            </li>
            <li>
            <a href="#" target="_blank" class="btn btn-just-icon btn-link btn-instagram">
                <i class="fa fa-instagram"></i>
            </a>
            </li>
        </ul>
        </div>



    </footer>
  <!--   Core JS Files   -->
    <script src="{{asset('assetsfront/files/assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assetsfront/files/assets/js/core/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assetsfront/files/assets/js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assetsfront/files/assets/js/plugins/moment.min.js')}}"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="{{asset('assetsfront/files/assets/js/plugins/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{asset('assetsfront/files/assets/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="../../buttons.github.io/buttons.js"></script>
  <!--	Plugin for Sharrre btn -->
  <script src="{{asset('assetsfront/files/assets/js/plugins/jquery.sharrre.js')}}" type="text/javascript"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="{{asset('assetsfront/files/assets/js/plugins/bootstrap-tagsinput.js')}}"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="{{asset('assetsfront/files/assets/js/plugins/bootstrap-selectpicker.js')}}" type="text/javascript"></script>
  <!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="{{asset('assetsfront/files/assets/js/plugins/jasny-bootstrap.min.js')}}" type="text/javascript"></script>
  <!--	Plugin for Small Gallery in Product Page -->
  <script src="{{asset('assetsfront/files/assets/js/plugins/jquery.flexisel.js')}}" type="text/javascript"></script>
  <!-- Plugins for presentation and navigation  -->
  <script src="{{asset('assetsfront/files/assets/demo/modernizr.js')}}" type="text/javascript"></script>
  <script src="{{asset('assetsfront/files/assets/demo/vertical-nav.js')}}" type="text/javascript"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="../../buttons.github.io/buttons.js"></script>
  <!-- Js With initialisations For Demo Purpose, Don't Include it in Your Project -->
  <script src="{{asset('assetsfront/files/assets/demo/demo.js')}}" type="text/javascript"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('assetsfront/files/assets/js/material-kit.mind1f1.js?v=2.2.0')}}" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      materialKitDemo.presentationAnimations();
    });
  </script>
</body>


</html>