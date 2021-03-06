<!DOCTYPE html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="car,auto,moto,repair,wash,cleaning,transport,workshop" />
    <meta name="author" content="" />

    <!-- Page Title -->
    <title>
        {{ trans('panel.site_title') }} | Welcome
    </title>

    <!-- Favicon and Touch Icons -->
    <link href="{{ asset('images/favicon.png') }}" rel="shortcut icon" type="image/png">
    <link href="{{ asset('images/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('images/apple-touch-icon-72x72.png') }}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{ asset('images/apple-touch-icon-114x114.png') }}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{ asset('images/apple-touch-icon-144x144.png') }}" rel="apple-touch-icon" sizes="144x144">

    <!-- Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/css-plugin-collections.css') }}" rel="stylesheet" />
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="{{ asset('css/menuzord-skins/menuzord-rounded-boxed.css') }}"
        rel="stylesheet" />
    <!-- CSS | Main style file -->
    <link href="{{ asset('css/style-main.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="{{ asset('css/preloader.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{{ asset('css/custom-bootstrap-margin-padding.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css">
    <!-- Revolution Slider 5.x CSS settings -->
    <link href="{{ asset('js/revolution-slider/css/settings.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('js/revolution-slider/css/layers.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('js/revolution-slider/css/navigation.css') }}" rel="stylesheet" type="text/css" />

    <!-- CSS | Theme Color -->
    <link href="{{ asset('css/colors/theme-skin-color-set-1.css') }}" rel="stylesheet" type="text/css">

    <!-- external javascripts -->
    <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="{{ asset('js/jquery-plugin-collection.js') }}"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="{{ asset('js/revolution-slider/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('js/revolution-slider/js/jquery.themepunch.revolution.min.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body class="___class_+?0___">
    <div id="wrapper" class="clearfix">
        <!-- preloader -->
        {{-- <div id="preloader">
            <div id="spinner">
                <img alt="" src="images/preloaders/5.gif">
            </div>
            <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
        </div> --}}

        @include('partials.navigation')


        <!-- Start main-content -->
        <div class="main-content">
            @yield('content')
        </div>

        <!-- Footer -->
        <footer id="footer" class="footer divider layer-overlay overlay-dark-8" data-bg-img="images/bg/bg6.jpg">
            <div class="container pt-70 pb-40">
                <div class="row mt-30">
                    <div class="col-md-2">
                        <div class="widget dark">
                            <h5 class="widget-title mb-10">Call Us Now</h5>
                            <div class="text-gray">
                                +61 3 1234 5678 <br>
                                +12 3 1234 5678
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="widget dark">
                            <h5 class="widget-title mb-10">Connect With Us</h5>
                            <ul class="styled-icons icon-bordered icon-sm">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5 col-md-offset-2">
                        <div class="widget dark">
                            <h5 class="widget-title mb-10">Subscribe Us</h5>
                            <form class="newsletter-form">
                                <div class="input-group">
                                    <input type="email" value="" name="EMAIL" placeholder="Your Email"
                                        class="form-control input-lg font-16" data-height="45px"
                                        style="height: 45px;">
                                    <span class="input-group-btn">
                                        <button data-height="45px"
                                            class="btn bg-theme-color-2 text-white btn-xs m-0 font-14"
                                            type="submit">Subscribe</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom bg-black-333">
                <div class="container pt-20 pb-20">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="font-11 text-black-777 m-0">Copyright &copy;2021 PacklandsMotor. All Rights Reserved
                            </p>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="widget no-border m-0">
                                <ul class="list-inline sm-text-center mt-5 font-12">
                                    <li>
                                        <a href="#">FAQ</a>
                                    </li>
                                    <li>|</li>
                                    <li>
                                        <a href="#">Help Desk</a>
                                    </li>
                                    <li>|</li>
                                    <li>
                                        <a href="#">Support</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
    <!-- end wrapper -->

    <!-- Footer Scripts -->
    <!-- JS | Custom script for all pages -->
    <script src="js/custom.js"></script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js">
    </script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if (session()->has('success'))
            toastr.success("{{session()->get('success')}}");
        @endif

        @if (session()->has('danger'))
            toastr.warning("{{session()->get('danger')}}");
        @endif

        @if (session()->has('error'))
            toastr.error("{{session()->get('error')}}");
        @endif
    </script>
</body>


</html>
