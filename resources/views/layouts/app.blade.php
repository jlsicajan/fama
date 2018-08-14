<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fama</title>
    <meta name="description" content="">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link href="https://fonts.googleapis.com/css?family=Black+Ops+One" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="/public/muziq/vendor/bootstrap.css">
    <link rel="stylesheet" href="/public/muziq/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="/public/muziq/vendor/superslides.css">
    <link rel="stylesheet" href="/public/muziq/vendor/owl.carousel.css">
    <link rel="stylesheet" href="/public/muziq/vendor/owl.transitions.css">
    <link rel="stylesheet" href="/public/muziq/vendor/flickity.min.css">
    <link rel="stylesheet" href="/public/muziq/vendor/swipebox.min.css">
    <link rel="stylesheet" href="/public/muziq/vendor/TimeCircles.css">

    <link rel="stylesheet" href="/public/muziq/main-hiphop.css">
    <link rel="stylesheet" href="/public/muziq/demo.css">

    <link rel="stylesheet" href="/public/muziq/colors/color-lightyellow.css">
    <link rel="stylesheet" href="/public/muziq/colors/color-lightblue.css">
    <link rel="stylesheet" href="/public/muziq/colors/color-purple.css">
    <link rel="stylesheet" href="/public/muziq/colors/color-green.css">
    <link rel="stylesheet" href="/public/muziq/colors/color-militar.css">
    <link rel="stylesheet" href="/public/muziq/colors/color-caqui.css">
    <link rel="stylesheet" href="/public/muziq/colors/color-lightred.css">

    <script src="/public/muziq/scripts/vendor/modernizr.js"></script>
    <script src="/public/muziq/scripts/vendor/jquery.js"></script>
    <script src="/public/muziq/scripts/vendor/bootstrap.js"></script>
    @yield('head')
</head>
<body data-spy="scroll" data-target="#navbar-muziq" data-offset="80">
<!-- LOADER -->
<div id="mask">
    <div class="loader">
        <!-- <img src="images/loading.gif" alt='loading'> -->
        <div class="cssload-container">
            <div class="cssload-shaft1"></div>
            <div class="cssload-shaft2"></div>
            <div class="cssload-shaft3"></div>
            <div class="cssload-shaft4"></div>
            <div class="cssload-shaft5"></div>
            <div class="cssload-shaft6"></div>
            <div class="cssload-shaft7"></div>
            <div class="cssload-shaft8"></div>
            <div class="cssload-shaft9"></div>
            <div class="cssload-shaft10"></div>
        </div>
    </div>
</div>
<!-- HEADER -->
<header id="jHeader">
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Desplegar navegación</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/home"><img src="public/img/logo/fama_logo.png" alt="logo"></a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse" id="navbar-muziq">
            <ul class="nav navbar-nav navbar-right nav-jls">
                <li>
                    <a href="/">
                        INICIO
                    </a>
                </li>
                <li>
                    <a href="/programacion">
                        PROGRAMACIÓN
                    </a>
                </li>
                <li>
                    <a href="/staff">
                        STAFF
                    </a>
                </li>
                <li>
                    <a href="/cine">
                        CINE
                    </a>
                </li>
                <li>
                    <a href="fotos">
                        FOTOS
                    </a>
                </li>
                <li>
                    <a href="los20">
                        LOS 20+
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>

@yield('content')
@yield('scripts')
<style type="text/css">
    .time{
        display: none !important;
    }

    .nav-jls li a{
        text-transform: uppercase !important;
    }
</style>
<script type="text/javascript">
    $(content).ready(function(){
        console.log("ready");
        $('.audiojs').addClass('playing');
    });
</script>
<footer>
    <div class="container">
        <p class="copy">© 2018 Radio fama 102.5 Todos los derechos reservados. by <a class="color-primary"
                                                                                     href="https://elcaminoweb.com.gt"
                                                                                     target="_blank">El Camino Web.</a>
        <ul class="menu-footer">
            <li><a href="/">Home</a></li>
        </ul>
    </div>
</footer>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Scripts -->

<script src="/public/muziq/scripts/vendor/jquery.superslides.min.js"></script>
<script src="/public/muziq/scripts/vendor/flickity.pkgd.js"></script>
<script src="/public/muziq/scripts/vendor/audio.min.js"></script>
<script src="/public/muziq/scripts/vendor/twitterFetcher_min.js"></script>
<script src="/public/muziq/scripts/vendor/isotope.pkgd.min.js"></script>
<script src="/public/muziq/scripts/vendor/jquery.swipebox.min.js"></script>
<script src="/public/muziq/scripts/vendor/TimeCircles.js"></script>
<script src="/public/muziq/scripts/vendor/owl.carousel.min.js"></script>
<script src="/public/muziq/scripts/vendor/jquery.parallax.min.js"></script>
<script src="/public/muziq/scripts/discography.js"></script>
<script src="/public/muziq/scripts/news.js"></script>
<script src="/public/muziq/scripts/main.js"></script>

<script src="/public/js/app.js"></script>
<script src="/public/js/nav_movements.js"></script>
<script src="/public/js/main_views/content/pagination_manager.js"></script>
@yield('after_body')
</body>
</html>