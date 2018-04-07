<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{setting('site.title')}}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
    <link href="../../assets/plugins/socicon/socicon.css" rel="stylesheet" type="text/css" />  {{--
    <link href="../../assets/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css" /> --}}
    <link href="../../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" /> {{--
    <link href="../../assets/plugins/animate/animate.min.css" rel="stylesheet" type="text/css" /> --}} {{--
    <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> --}}
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN: BASE PLUGINS  -->
    <link href="../../assets/plugins/revo-slider/css/settings.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css" />
     {{--
    <link href="../../assets/plugins/revo-slider/css/layers.css" rel="stylesheet" type="text/css" /> --}} {{--
    <link href="../../assets/plugins/revo-slider/css/navigation.css" rel="stylesheet" type="text/css" /> --}} {{--
    <link href="../../assets/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css" /> --}} {{--
    <link href="../../assets/plugins/owl-carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css" /> --}} {{--
    <link href="../../assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css" /> --}} {{--
    <link href="../../assets/plugins/slider-for-bootstrap/css/slider.css" rel="stylesheet" type="text/css" /> --}}
    <!-- END: BASE PLUGINS -->

    <!-- BEGIN: PAGE STYLES -->
    {{--
    <link href="../../assets/plugins/ilightbox/css/ilightbox.css" rel="stylesheet" type="text/css" /> --}}
    <!-- END: PAGE STYLES -->

    <!-- BEGIN THEME STYLES -->
    {{--
    <link href="../../assets/demos/default/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/demos/default/css/components.css" id="style_components" rel="stylesheet" type="text/css" />
    <link href="../../assets/demos/default/css/themes/default.css" rel="stylesheet" id="style_theme" type="text/css" />
    <link href="../../assets/demos/default/css/custom.css" rel="stylesheet" type="text/css" /> --}}
    <!-- END THEME STYLES -->

    <link rel="shortcut icon" href="favicon.ico" /> {{--
    <link rel="stylesheet" href="{{ mix('/css/plugins.css') }}"> --}}
    <link rel="stylesheet" href="{{ mix('/css/components.css') }}">

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">


</head>

<body class="c-layout-header-fixed c-layout-header-mobile-fixed">

    @include('layouts.header')




    <div class="c-layout-page">
        @yield('content')
    </div>

    <!-- BEGIN: LAYOUT/FOOTERS/FOOTER-6 -->
    <a name="footer"></a>
    <footer class="c-layout-footer c-layout-footer-6 c-bg-grey-1">
        @include('layouts.footer')
        <div class="c-postfooter c-bg-dark-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 c-col">
                        <p class="c-copyright c-font-grey">{{date('Y')}} &copy; {{setting('site.title')}}
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </footer>
    <!-- END: LAYOUT/FOOTERS/FOOTER-6 -->

    <!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
    <div class="c-layout-go2top">
        <i class="icon-arrow-up"></i>
    </div>
    <!-- END: LAYOUT/FOOTERS/GO2TOP -->

    <!-- BEGIN: LAYOUT/BASE/BOTTOM -->
    <!-- BEGIN: CORE PLUGINS -->
    <!--[if lt IE 9]>
    	<script src="../../assets/global/plugins/excanvas.min.js"></script>
    	<![endif]-->
    <script src="../../assets/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="../../assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../assets/plugins/jquery.easing.min.js" type="text/javascript"></script>
    <script src="../../assets/plugins/reveal-animate/wow.js" type="text/javascript"></script>
    <script src="../../assets/demos/default/js/scripts/reveal-animate/reveal-animate.js" type="text/javascript"></script>

    <!-- END: CORE PLUGINS -->

    <!-- BEGIN: LAYOUT PLUGINS -->
    <script src="../../assets/plugins/revo-slider/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
    <script src="../../assets/plugins/revo-slider/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
    <script src="../../assets/plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js" type="text/javascript"></script>
    <script src="../../assets/plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js" type="text/javascript"></script>
    <script src="../../assets/plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js" type="text/javascript"></script>
    <script src="../../assets/plugins/revo-slider/js/extensions/revolution.extension.video.min.js" type="text/javascript"></script>
    <script src="../../assets/plugins/revo-slider/js/extensions/revolution.extension.parallax.min.js" type="text/javascript"></script>
    <script src="../../assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
    <script src="../../assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
    <script src="../../assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
    <script src="../../assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
    <script src="../../assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="../../assets/plugins/smooth-scroll/jquery.smooth-scroll.js" type="text/javascript"></script>
    <script src="../../assets/plugins/typed/typed.min.js" type="text/javascript"></script>
    <script src="../../assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js" type="text/javascript"></script>
    <script src="../../assets/plugins/js-cookie/js.cookie.js" type="text/javascript"></script>
    <!-- END: LAYOUT PLUGINS -->

    <!-- BEGIN: THEME SCRIPTS -->
    <script src="../../assets/base/js/components.js" type="text/javascript"></script>
    <script src="../../assets/base/js/components-shop.js" type="text/javascript"></script>
    <script src="../../assets/base/js/app.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            App.init(); // init core
        });
    </script>
    <!-- END: THEME SCRIPTS -->

    <!-- BEGIN: PAGE SCRIPTS -->
    <script src="../../assets/demos/default/js/scripts/revo-slider/slider-4.js" type="text/javascript"></script>
    <script src="../../assets/plugins/isotope/isotope.pkgd.min.js" type="text/javascript"></script>
    <script src="../../assets/plugins/isotope/imagesloaded.pkgd.min.js" type="text/javascript"></script>
    <script src="../../assets/plugins/isotope/packery-mode.pkgd.min.js" type="text/javascript"></script>
    <script src="../../assets/plugins/ilightbox/js/jquery.requestAnimationFrame.js" type="text/javascript"></script>
    <script src="../../assets/plugins/ilightbox/js/jquery.mousewheel.js" type="text/javascript"></script>
    <script src="../../assets/plugins/ilightbox/js/ilightbox.packed.js" type="text/javascript"></script>
    <script src="../../assets/demos/default/js/scripts/pages/isotope-gallery.js" type="text/javascript"></script>
    <script src="../../assets/demos/default/js/scripts/pages/fullwidth-gallery.js" type="text/javascript"></script>
    <script src="../../assets/plugins/revo-slider/js/extensions/revolution.extension.parallax.min.js" type="text/javascript"></script>
    <!-- END: PAGE SCRIPTS -->
    <!-- END: LAYOUT/BASE/BOTTOM -->
</body>

</html>
