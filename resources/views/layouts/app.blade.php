<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"><!--<![endif]-->
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
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
          rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="/public/css/app.css" rel="stylesheet">
    <script src="/public/js/modernizr.js"></script>
    @yield('head')
</head>
<body data-spy="scroll" data-target="#navbar-muziq" data-offset="80">
<div class="loading d-none">
    <div class="lds-ripple">
        <div></div>
        <div></div>
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
            <a class="navbar-brand" href="#anchor00"><img src="public/img/logo/fama_logo.png" alt="logo"></a>
        </div>


        <div class="collapse navbar-collapse navbar-ex1-collapse" id="navbar-muziq">
            <ul class="nav navbar-nav navbar-right">
                @foreach(App\Category::list_for_menu() as $category)
                    <li>
                        @if(empty($category['subcategories']))
                            <a class="ajax_link {{ Request::is('contenido/' . $category['id'] . '/0' ) ? 'active' : '' }}"
                               data-href="{{ route('content', [$category['id'], 0]) }}">
                                {{ $category['nombre'] }}
                            </a>
                        @else
                            <a class="nav-link dropdown-toggle" href="#" id="categories_multimenu"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ $category['nombre'] }}
                            </a>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>

    </nav>
</header>

@yield('content')
@yield('scripts')

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
<script src="/public/js/app.js"></script>
@yield('after_body')
</body>
</html>