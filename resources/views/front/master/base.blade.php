

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Signal - Trident FX</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://tools.tridentfxacademy.com/" />
    <!--  Social tags      -->
    <meta name="keywords" content="Dengan menggunakan Trident Trading System, Anda akan belajar bagaimana cara seorang trader profesional mendapatkan profit melalui prediksi secara teknikal dan fundamental yang terukur dan memaksimalkan profit Anda menggunakan perencanaan keuangan yang baik.">
    <meta name="description" content="Trident Trading System - Professional Forex Trading Courses and Premium Signal">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Trident FX Academy">
    <meta itemprop="description" content="Trident Trading System - Professional Forex Trading Courses and Premium Signal">
    <meta itemprop="image" content="{{asset('assets/img/thumbnail.png')}}">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@tridenfxacademy">
    <meta name="twitter:title" content="Trident FX Academy">
    <meta name="twitter:description" content="Trident Trading System - Professional Forex Trading Courses and Premium Signal">
    <meta name="twitter:creator" content="@tridenfxacademy">
    <meta name="twitter:image" content="{{asset('assets/img/thumbnail.png')}}">
    <meta name="twitter:data1" content="Trident FX Academy">
    <meta name="twitter:label1" content="Forex">
    <!-- Open Graph data -->
    <meta property="og:title" content="Trident FX Academy" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{url('')}}" />
    <meta property="og:image" content="{{asset('assets/img/thumbnail.png')}}" />
    <meta property="og:description" content="Trident Trading System - Professional Forex Trading Courses and Premium Signal" />
    <meta property="og:site_name" content="Triden FX Academy" />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('font-awesome/latest/css/font-awesome.min.css')}}" />
    <!-- CSS Files -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/light-bootstrap-dashboard790f.css?v=2.0.1')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('assets/css/demo.css')}}" rel="stylesheet" />

    <style>
        canvas {
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
        }  
        .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
            background-color: #c2f0fc;
            cursor: pointer;
        }
    </style>

 
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script>
      var OneSignal = window.OneSignal || [];
      OneSignal.push(function() {
        OneSignal.init({
          appId: "458c3dda-701a-4ec2-9905-ceb1de883209",
          notifyButton: {
            enable: true,
          },
        });
      });
    </script>
    
    
    </head>

    <body class="sidebar-mini">

    <div class="wrapper">

        @include('front.master.sidebar')

        <div class="main-panel" style="background-color:white;background-image: url('assets/img/cover-bg.png');background-repeat:no-repeat">

            <!-- Navbar -->
			@include('front.master.navbar')
            <!-- End Navbar -->
            
            <div class="content">
                <div class="container-fluid">

                    @yield('content')

                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            <a href="https://tridenfxacademy.com">Triden FX Academy</a>
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
    
<!--   Core JS Files   -->
<script src="{{asset('assets/js/core/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: https://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{asset('assets/js/plugins/bootstrap-switch.js')}}"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
<!--  Chartist Plugin  -->
<script src="{{asset('assets/js/plugins/chartist.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('assets/js/plugins/bootstrap-notify.js')}}"></script>
<!--  Share Plugin -->
<script src="{{asset('assets/js/plugins/jquery.sharrre.js')}}"></script>
<!--  jVector Map  -->
<script src="{{asset('assets/js/plugins/jquery-jvectormap.js')}}" type="text/javascript"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{asset('assets/js/plugins/moment.min.js')}}"></script>
<!--  DatetimePicker   -->
<script src="{{asset('assets/js/plugins/bootstrap-datetimepicker.js')}}"></script>
<!--  Sweet Alert  -->
<script src="{{asset('assets/js/plugins/sweetalert2.min.js')}}" type="text/javascript"></script>
<!--  Tags Input  -->
<script src="{{asset('assets/js/plugins/bootstrap-tagsinput.js')}}" type="text/javascript"></script>
<!--  Sliders  -->
<script src="{{asset('assets/js/plugins/nouislider.js')}}" type="text/javascript"></script>
<!--  Bootstrap Select  -->
<script src="{{asset('assets/js/plugins/bootstrap-selectpicker.js')}}" type="text/javascript"></script>
<!--  jQueryValidate  -->
<script src="{{asset('assets/js/plugins/jquery.validate.min.js')}}" type="text/javascript"></script>
<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{asset('assets/js/plugins/jquery.bootstrap-wizard.js')}}"></script>
<!--  Bootstrap Table Plugin -->
<script src="{{asset('assets/js/plugins/bootstrap-table.js')}}"></script>
<!--  DataTable Plugin -->
<script src="{{asset('assets/js/plugins/jquery.dataTables.min.js')}}"></script>
<!--  Full Calendar   -->
<script src="{{asset('assets/js/plugins/fullcalendar.min.js')}}"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('assets/js/light-bootstrap-dashboard790f.js?v=2.0.1')}}" type="text/javascript"></script>
<!-- Light Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('assets/js/demo.js')}}"></script>

@yield('footer-content')

<script>
    $('.dropdown-toggle').on('click', function () {
        $('.alert-id').hide()
    });
</script>

</body>

</html>
