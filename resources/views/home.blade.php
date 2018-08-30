<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
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
    <link rel="icon"
          type="image/png"
          href="https://www.zamzar.com/images/filetypes/ico.png">
    <link href="/public/css/app.css" rel="stylesheet">
    <script src="/public/js/modernizr.js"></script>
</head>
<body data-spy="scroll" data-target="#navbar-muziq" data-offset="80">

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


<!-- PLAYER -->
<div class="player horizontal">
    <div class="container">
        <div class="info-album-player">
            <div class="album-cover" id="bg-image3"></div>
            <p class="album-title">Spectrum</p>
            <p class="artist-name">Album by Blummsday</p>
        </div>
        <div class="player-content">
            <audio preload></audio>
            <ol class="playlist">
                <li><a href="#" data-src="mp3/01preview_mp3.mp3">Black home</a></li>
                <li><a href="#" data-src="mp3/02preview_mp3.mp3">Lord pretty</a></li>
                <li><a href="#" data-src="mp3/03Hip_Hop_Music_by_Boxbeats_preview.mp3">Better things</a></li>
            </ol>
            <div class="nextprev">
                <span class="prev">prev</span>
                <span class="next">next</span>
            </div>
            <span class="btnloop">loop</span>
        </div>
    </div>
</div>

<!-- NEWS -->
<div class="section blog inverse-color pattern list-posts" id="anchor07">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="voffset70"></div>
                <div class="separator-icon">
                    <i class="fa fa-microphone"></i>
                </div>
                <div class="voffset30"></div>
                <p class="pretitle">that's new</p>
                <div class="voffset20"></div>
                <h2 class="title">Last news</h2>
                <div class="voffset80"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <article class="post-item">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="photo-post" id="image-post1"></div>
                            <p class="date">
                                <span class="day">01</span>
                                <span class="month">feb</span>
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <div class="voffset30"></div>
                            <h4 class="title small"><span>Date:</span> FEB 01 2016</h4>
                            <h3 class="title post">KYgo Brings the tropical house feels on new single 'stay'</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed repudiandae, officiis.
                                Maxime neque similique doloremque eveniet, minima, quam perspiciatis, dolore, sapiente
                                quisquam error tenetur rem vitae ratione. Atque, asperiores voluptatem?</p>
                            <a href="#" class="btn rounded open-new" data-url="news/new-01.html">Read more</a>
                            <span class="btn rounded close-new">view less</span>
                        </div>
                        <section class="section news-window">
                            <div class="news-content"></div><!-- AJAX Dinamic Content -->
                        </section>
                    </div>
                </article>
                <article class="post-item">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="photo-post" id="image-post2"></div>
                            <p class="date">
                                <span class="day">20</span>
                                <span class="month">jan</span>
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <div class="voffset30"></div>
                            <h4 class="title small"><span>Date:</span> JAN 20 2016</h4>
                            <h3 class="title post">KYgo Brings the tropical house feels on new single 'stay'</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed repudiandae, officiis.
                                Maxime neque similique doloremque eveniet, minima, quam perspiciatis, dolore, sapiente
                                quisquam error tenetur rem vitae ratione. Atque, asperiores voluptatem?</p>
                            <a href="#" class="btn rounded open-new" data-url="news/new-02.html">Read more</a>
                            <span class="btn rounded close-new">view less</span>
                        </div>
                        <section class="section news-window">
                            <div class="news-content"></div><!-- AJAX Dinamic Content -->
                        </section>
                    </div>
                </article>
                <article class="post-item">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="photo-post" id="image-post3"></div>
                            <p class="date">
                                <span class="day">18</span>
                                <span class="month">jan</span>
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <div class="voffset30"></div>
                            <h4 class="title small"><span>Date:</span> JAN 18 2016</h4>
                            <h3 class="title post">KYgo Brings the tropical house feels on new single 'stay'</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed repudiandae, officiis.
                                Maxime neque similique doloremque eveniet, minima, quam perspiciatis, dolore, sapiente
                                quisquam error tenetur rem vitae ratione. Atque, asperiores voluptatem?</p>
                            <a href="#" class="btn rounded open-new" data-url="news/new-03.html">Read more</a>
                            <span class="btn rounded close-new">view less</span>
                        </div>
                        <section class="section news-window">
                            <div class="news-content"></div><!-- AJAX Dinamic Content -->
                        </section>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>

<!-- TWITTER -->
<section class="section twitterfeed inverse-color full-width parallax-section"
         data-parallax-image="public/images/demo/twitter/bg-twitter.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <i class="fa fa-twitter"></i>
                <div id="twitter-feed"></div>
            </div>
        </div>
    </div>
</section>

<!-- FEATURED ARTIST -->
<section class="section inverse-color featured-artists" id="anchor02">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="voffset70"></div>
                <div class="separator-icon">
                    <i class="fa fa-microphone"></i>
                </div>
                <div class="voffset30"></div>
                <p class="pretitle">get read for the summer 2016</p>
                <div class="voffset20"></div>
                <h2 class="title">featured Artist</h2>
                <div class="voffset80"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="voffset20"></div>
                <div class="js-flickity"
                     data-flickity-options="{ &quot;cellAlign&quot;: &quot;left&quot;, &quot;wrapAround&quot;: true, &quot;contain&quot;: true, &quot;prevNextButtons&quot;: false }">
                    <div class="gallery-cell col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="featured-artist">
                            <div class="image">
                                <img src="public/images/demo/artists/featured-artist1.jpg" alt="">
                            </div>
                            <div class="rollover">
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                                <div class="text">
                                    <h4 class="title-artist">Mc Hood</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam rem, quasi alias
                                        sunt velit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-cell col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="featured-artist">
                            <div class="image">
                                <img src="public/images/demo/artists/featured-artist2.jpg" alt="">
                            </div>
                            <div class="rollover">
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                                <div class="text">
                                    <h4 class="title-artist">Tarantula</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam rem, quasi alias
                                        sunt velit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-cell col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="featured-artist">
                            <div class="image">
                                <img src="public/images/demo/artists/featured-artist3.jpg" alt="">
                            </div>
                            <div class="rollover">
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                                <div class="text">
                                    <h4 class="title-artist">Brain G</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam rem, quasi alias
                                        sunt velit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-cell col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="featured-artist">
                            <div class="image">
                                <img src="public/images/demo/artists/featured-artist4.jpg" alt="">
                            </div>
                            <div class="rollover">
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                                <div class="text">
                                    <h4 class="title-artist">Lady Funk</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam rem, quasi alias
                                        sunt velit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-cell col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="featured-artist">
                            <div class="image">
                                <img src="public/images/demo/artists/featured-artist3.jpg" alt="">
                            </div>
                            <div class="rollover">
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                                <div class="text">
                                    <h4 class="title-artist">Dj <br>mery <br>myers</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam rem, quasi alias
                                        sunt velit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="voffset120"></div>
    </div>
</section>

<!-- BIOGRAPHY -->
<section class="section biography inverse-color" id="anchor03">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="voffset70"></div>
                <div class="separator-icon">
                    <i class="fa fa-microphone"></i>
                </div>
                <div class="voffset30"></div>
                <p class="pretitle">About the band</p>
                <div class="voffset20"></div>
                <h2 class="title">biography</h2>
                <div class="voffset110"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <img src="public/images/demo/biography/biography.jpg" alt="">
            </div>
            <div class="col-lg-6">
                <div class="voffset50"></div>
                <div class="quote">
                    <p>"If I can play one note and make you cry, then that's better than thouse fancy dancers playing
                        twenty notes."</p>
                    <p class="author">Robbie Robertson</p>
                </div>
                <div class="description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam iure blanditiis velit, suscipit
                        quidem fuga, magni repudiandae atque placeat sint corporis commodi praesentium dolore
                        necessitatibus minima nemo ipsam, perspiciatis libero, quos. Obcaecati consectetur vel nostrum
                        praesentiu.</p>
                    <p>Obcaecati consectetur vel nostrum praesentium dolore necessitatibus minima nemo ipsam,
                        perspiciatis libero, quos, odio quaerat asperiores repudiandae atque placeat sint corporis
                        commodi onsectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <div class="voffset150"></div>
    </div>
</section>

<!-- DISCOGRAPHY -->
<section class="section discography inverse-color" id="anchor04">
    <div id="discography"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="voffset70"></div>
                <div class="separator-icon">
                    <i class="fa fa-music"></i>
                </div>
                <div class="voffset30"></div>
                <p class="pretitle">album hightlights</p>
                <div class="voffset20"></div>
                <h2 class="title">Discography</h2>
                <div class="voffset80"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="carousel-discography js-flickity"
                    data-flickity-options="{ &quot;cellAlign&quot;: &quot;left&quot;, &quot;wrapAround&quot;: true, &quot;contain&quot;: true, &quot;prevNextButtons&quot;: false }">
                    <!-- col-xlg-3 -->
                    <li class="gallery-cell col-xs-12 col-sm-6 col-md-4">
                        <div class="info-album">
                            <div class="cover open-disc" data-url="discs/disc-01.html">
                                <img src="public/images/demo/discography/disco-1.jpg" alt="">
                                <div class="rollover">
                                    <i class="fa fa-cart-plus"></i>
                                    <p>view album</p>
                                </div>
                            </div>
                            <p class="album">Perfect symmetry</p>
                            <p class="artist">Keane</p>
                        </div>
                    </li>
                    <li class="gallery-cell col-xs-12 col-sm-6 col-md-4">
                        <div class="info-album">
                            <div class="cover open-disc" data-url="discs/disc-02.html">
                                <img src="public/images/demo/discography/disco-2.jpg" alt="">
                                <div class="rollover">
                                    <i class="fa fa-cart-plus"></i>
                                    <p>view album</p>
                                </div>
                            </div>
                            <p class="album">under the iron sea</p>
                            <p class="artist">Keane</p>
                        </div>
                    </li>
                    <li class="gallery-cell col-xs-12 col-sm-6 col-md-4">
                        <div class="info-album">
                            <div class="cover open-disc" data-url="discs/disc-03.html">
                                <img src="public/images/demo/discography/disco-3.jpg" alt="">
                                <div class="rollover">
                                    <i class="fa fa-cart-plus"></i>
                                    <p>view album</p>
                                </div>
                            </div>
                            <p class="album">spectrum</p>
                            <p class="artist">blummsday</p>
                        </div>
                    </li>
                    <li class="gallery-cell col-xs-12 col-sm-6 col-md-4">
                        <div class="info-album">
                            <div class="cover open-disc" data-url="discs/disc-04.html">
                                <img src="public/images/demo/discography/disco-4.jpg" alt="">
                                <div class="rollover">
                                    <i class="fa fa-cart-plus"></i>
                                    <p>view album</p>
                                </div>
                            </div>
                            <p class="album">friend, family, enemy</p>
                            <p class="artist">magdalena</p>
                        </div>
                    </li>
                    <li class="gallery-cell col-xs-12 col-sm-6 col-md-4">
                        <div class="info-album">
                            <div class="cover open-disc" data-url="discs/disc-01.html">
                                <img src="public/images/demo/discography/disco-1.jpg" alt="">
                                <div class="rollover">
                                    <i class="fa fa-cart-plus"></i>
                                    <p>view album</p>
                                </div>
                            </div>
                            <p class="album">under the iron sea</p>
                            <p class="artist">Keane</p>
                        </div>
                    </li>
                    <li class="gallery-cell col-xs-12 col-sm-6 col-md-4">
                        <div class="info-album">
                            <div class="cover open-disc" data-url="discs/disc-02.html">
                                <img src="public/images/demo/discography/disco-2.jpg" alt="">
                                <div class="rollover">
                                    <i class="fa fa-cart-plus"></i>
                                    <p>view album</p>
                                </div>
                            </div>
                            <p class="album">under the iron sea</p>
                            <p class="artist">Keane</p>
                        </div>
                    </li>
                </ul>
                <div class="voffset90"></div>
            </div>
        </div>
    </div>
    <!-- DETAILS DISCO -->
    <div id="project-show"></div>
    <div class="section player-album project-window inverse-color">
        <div class="project-content"></div><!-- AJAX Dinamic Content -->
    </div>
</section>

<!-- TOUR DATES -->
<section class="section full-width inverse-color tourdates" id="anchor05">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="voffset70"></div>
                <div class="separator-icon">
                    <i class="fa fa-microphone"></i>
                </div>
                <div class="voffset30"></div>
                <p class="pretitle">get ready for the live show</p>
                <div class="voffset20"></div>
                <h2 class="title">tour dates</h2>
                <div class="voffset80"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="image-tour"></div>
            </div>
            <div class="col-sm-6">
                <div class="tour-info">
                    <ul class="carousel-dates jcarouselDates">
                        <li class="gallery-cell" id="tour1">
                            <div class="vcenter">
                                <p class="name-tour">Built<br>to spill</p>
                                <p class="separator">live</p>
                                <p class="subtitle-tour">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum atque tempore
                                    iste.</p>
                                <p class="buy">
                                    <a href="#" class="btn rounded icon"><i class="fa fa-ticket"></i> buy ticket</a>
                                </p>
                            </div>
                        </li>
                        <li class="gallery-cell" id="tour2">
                            <div class="vcenter">
                                <p class="name-tour">Show in las Vegas</p>
                                <p class="separator">live</p>
                                <p class="subtitle-tour">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum atque tempore
                                    iste.</p>
                                <p class="buy">
                                    <a href="#" class="btn rounded icon"><i class="fa fa-ticket"></i> buy ticket</a>
                                </p>
                            </div>
                        </li>
                        <li class="gallery-cell" id="tour3">
                            <div class="vcenter">
                                <p class="name-tour">Live in New York</p>
                                <p class="separator">live</p>
                                <p class="subtitle-tour">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum atque tempore
                                    iste.</p>
                                <p class="buy">
                                    <a href="#" class="btn rounded icon"><i class="fa fa-ticket"></i> buy ticket</a>
                                </p>
                            </div>
                        </li>
                    </ul>
                    <ul class="dates-tour button-group">
                        <li class="button active">
                            november
                            <span>09</span>
                        </li>
                        <li class="button">
                            november
                            <span>08</span>
                        </li>
                        <li class="button">
                            november
                            <span>01</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- UPCOMMING EVENTS -->
<section class="section full-width upcomming-events-list inverse-color">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h4 class="upcomming-events-list-title">upcoming events</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <li>
                        <div>
                            <p class="date-event">21 <span>Jan'16</span></p>
                            <p class="name">
                                <span>Live show  New York</span>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab enim perferendis,
                                doloremque esse.
                            </p>
                            <p class="venue">
                                venue
                                <span>Madison Square Garden</span>
                            </p>
                            <p class="price">
                                tickets
                                <span>$19</span>
                            </p>
                            <p class="buy">
                                <a href="#" class="btn rounded icon"><i class="fa fa-ticket"></i> buy ticket</a>
                            </p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <p class="date-event">25 <span>Jan'16</span></p>
                            <p class="name">
                                <span>Live Tour Los Angeles</span>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab enim perferendis,
                                doloremque esse.
                            </p>
                            <p class="venue">
                                venue
                                <span>Glam Club</span>
                            </p>
                            <p class="price">
                                tickets
                                <span>$19</span>
                            </p>
                            <p class="buy">
                                <a href="#" class="btn rounded icon"><i class="fa fa-ticket"></i> buy ticket</a>
                            </p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <p class="date-event">01 <span>Feb'16</span></p>
                            <p class="name">
                                <span>Live Show  Boston</span>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab enim perferendis,
                                doloremque esse.
                            </p>
                            <p class="venue">
                                venue
                                <span>Howard Theater</span>
                            </p>
                            <p class="price">
                                tickets
                                <span>$19</span>
                            </p>
                            <p class="buy">
                                <a href="#" class="btn rounded icon"><i class="fa fa-ticket"></i> buy ticket</a>
                            </p>
                        </div>
                    </li>

                    <li class="more">
                        <div>
                            <p class="date-event">15 <span>Feb'16</span></p>
                            <p class="name">
                                <span>Live Tour Los Angeles</span>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab enim perferendis,
                                doloremque esse.
                            </p>
                            <p class="venue">
                                venue
                                <span>Sugar Night Club</span>
                            </p>
                            <p class="price">
                                tickets
                                <span>$19</span>
                            </p>
                            <p class="buy">
                                <a href="#" class="btn rounded icon"><i class="fa fa-ticket"></i> buy ticket</a>
                            </p>
                        </div>
                    </li>
                    <li class="more">
                        <div>
                            <p class="date-event">24 <span>Feb'16</span></p>
                            <p class="name">
                                <span>Live Show London</span>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab enim perferendis,
                                doloremque esse.
                            </p>
                            <p class="venue">
                                venue
                                <span>Monarch Theater</span>
                            </p>
                            <p class="price">
                                tickets
                                <span>$19</span>
                            </p>
                            <p class="buy">
                                <a href="#" class="btn rounded icon"><i class="fa fa-ticket"></i> buy ticket</a>
                            </p>
                        </div>
                    </li>
                    <li class="more">
                        <div>
                            <p class="date-event">05 <span>Mar'16</span></p>
                            <p class="name">
                                <span>Live Show  New York</span>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab enim perferendis,
                                doloremque esse.
                            </p>
                            <p class="venue">
                                venue
                                <span>Madison Square Garden</span>
                            </p>
                            <p class="price">
                                tickets
                                <span>$19</span>
                            </p>
                            <p class="buy">
                                <a href="#" class="btn rounded icon"><i class="fa fa-ticket"></i> buy ticket</a>
                            </p>
                        </div>
                    </li>
                </ul>
                <p class="view-all-events">
                    <a id="more-events" href="#" class="btn rounded border">View all events</a>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- LATEST MEDIA -->
<section class="section last-media pattern inverse-color bg-patern" id="anchor06">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="voffset90"></div>
                <div class="separator-icon">
                    <i class="fa fa-picture-o"></i>
                </div>
                <div class="voffset30"></div>
                <p class="pretitle">get read for the last stuff</p>
                <div class="voffset20"></div>
                <h2 class="title">latest media</h2>
                <div class="voffset50"></div>
            </div>
        </div>
        <!-- Filters -->
        <div class="row">
            <div class="col-md-12">
                <ul class="filters">
                    <li data-filter="*" class="is-checked wow fadeInUp" data-wow-delay="0.5s">All</li>
                    <li data-filter=".music" class="wow fadeInUp" data-wow-delay="0.8s">Music</li>
                    <li data-filter=".concert" class="wow fadeInUp" data-wow-delay="1s">Concert</li>
                    <li data-filter=".video" class="wow fadeInUp" data-wow-delay="1.2s">Video</li>
                    <li data-filter=".dj" class="wow fadeInUp" data-wow-delay="1.4s">Dj</li>
                    <li data-filter=".events" class="wow fadeInUp" data-wow-delay="1.6s">Events</li>
                    <li data-filter=".party" class="wow fadeInUp" data-wow-delay="1.8s">Party</li>
                </ul>
            </div>
        </div>
        <!-- gallery -->
        <div class="row">
            <div class="col-md-12">
                <div class="voffset50"></div>
                <div class="thumbnails">
                    <div class="thumbnail video">
                        <a href="https://vimeo.com/5182570" class="swipebox"> <!-- data-fancybox-type="iframe" -->
                            <img src="public/images/demo/gallery/gallery1.jpg" alt="">
                            <div class="rollover">
                                <i class="video"></i>
                            </div>
                        </a>
                    </div>
                    <div class="thumbnail concert">
                        <a href="public/images/demo/gallery/gallery2.jpg" class="swipebox">
                            <img src="public/images/demo/gallery/gallery2.jpg" alt="">
                            <div class="rollover">
                                <i class="plus"></i>
                            </div>
                        </a>
                    </div>
                    <div class="thumbnail music">
                        <a href="public/images/demo/gallery/gallery3.jpg" class="swipebox">
                            <img src="public/images/demo/gallery/gallery3.jpg" alt="">
                            <div class="rollover">
                                <i class="plus"></i>
                            </div>
                        </a>
                    </div>
                    <div class="thumbnail small dj">
                        <a href="public/images/demo/gallery/gallery4.jpg" class="swipebox">
                            <img src="public/images/demo/gallery/gallery4.jpg" alt="">
                            <div class="rollover">
                                <i class="plus"></i>
                            </div>
                        </a>
                    </div>
                    <div class="thumbnail small events">
                        <a href="public/images/demo/gallery/gallery5.jpg" class="swipebox">
                            <img src="public/images/demo/gallery/gallery5.jpg" alt="">
                            <div class="rollover">
                                <i class="plus"></i>
                            </div>
                        </a>
                    </div>
                    <div class="thumbnail small party">
                        <a href="public/images/demo/gallery/gallery6.jpg" class="swipebox">
                            <img src="public/images/demo/gallery/gallery6.jpg" alt="">
                            <div class="rollover">
                                <i class="plus"></i>
                            </div>
                        </a>
                    </div>
                    <div class="thumbnail small music">
                        <a href="public/images/demo/gallery/gallery7.jpg" class="swipebox">
                            <img src="public/images/demo/gallery/gallery7.jpg" alt="">
                            <div class="rollover">
                                <i class="plus"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="voffset50"></div>
                <p class="loadmore">
                    <a id="append" href="#" class="btn rounded border">Load more</a>
                </p>
                <div id="more-items">
                    <div class="thumbnail video">
                        <a href="public/images/demo/gallery/gallery2.jpg" class="swipebox">
                            <img src="public/images/demo/gallery/gallery2.jpg" alt="">
                            <div class="rollover">
                                <i class="plus"></i>
                            </div>
                        </a>
                    </div>
                    <div class="thumbnail concert">
                        <a href="public/images/demo/gallery/gallery1.jpg" class="swipebox">
                            <img src="public/images/demo/gallery/gallery1.jpg" alt="">
                            <div class="rollover">
                                <i class="plus"></i>
                            </div>
                        </a>
                    </div>
                    <div class="thumbnail small dj">
                        <a href="public/images/demo/gallery/gallery5.jpg" class="swipebox">
                            <img src="public/images/demo/gallery/gallery5.jpg" alt="">
                            <div class="rollover">
                                <i class="plus"></i>
                            </div>
                        </a>
                    </div>
                    <div class="thumbnail small events">
                        <a href="public/images/demo/gallery/gallery4.jpg" class="swipebox">
                            <img src="public/images/demo/gallery/gallery4.jpg" alt="">
                            <div class="rollover">
                                <i class="plus"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="voffset80"></div>
            </div>
        </div>
    </div>
</section>

<!-- CONTACTS -->
<section class="section inverse-color contact" id="anchor08">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="voffset70"></div>
                <div class="separator-icon">
                    <i class="fa fa fa-microphone"></i>
                </div>
                <div class="voffset30"></div>
                <p class="pretitle">get it touch</p>
                <div class="voffset20"></div>
                <h2 class="title">say hello!</h2>
                <div class="voffset80"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-7">
                <form action="mail.php" method="post" id="contactform" class="contact-form">
                    <div class="form-group">
                        <label class="title small" for="name">Your name:</label>
                        <input type="text" placeholder="Full Name" name="name" id="name" class="text name required">
                    </div>

                    <div class="form-group">
                        <label class="title small" for="email">Your email:</label>
                        <input type="email" placeholder="Your Email" name="email" id="email"
                               class="text email required">
                    </div>

                    <div class="form-group">
                        <label class="title small" for="message">Your message:</label>
                        <textarea name="message" class="text area required" id="message"
                                  placeholder="Type Message"></textarea>
                    </div>

                    <!-- <div class="formSent"><p><strong>Your Message Has Been Sent!</strong> Thank you for contacting us.</p></div> -->
                    <input type="submit" value="Submit" class="btn rounded">
                    <div class="voffset80"></div>
                </form>
            </div>
            <div class="col-sm-6 col-md-5">
                <div class="col-contact">
                    <h4 class="title small">Music studio</h4>
                    <div class="voffset20"></div>
                    <p>1814 NE Miami Gardens Drive Suite #1007</p>
                    <p>North Miami Beach, FL, 333179</p>
                    <ul class="contact">
                        <li><i class="fa fa-phone"></i> 1.800.987.7890</li>
                        <li><i class="fa fa-envelope"></i> booking@visionmax.com</li>
                    </ul>
                    <h4 class="title small">Get socialized with us</h4>
                    <ul class="social-links">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer>
    <div class="container">
        <p class="copy">© 2018 Radio fama 102.5 Todos los derechos reservados. by <a class="color-primary"
                                                                                  href="https://elcaminoweb.com.gt"
                                                                                  target="_blank">El Camino Web.</a>
        <ul class="menu-footer">
            <li><a href="#">disclaimer</a></li>
            <li><a href="#">terms & conditions</a></li>
            <li><a href="#">privacy policy</a></li>
        </ul>
    </div>
</footer>

<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Scripts -->
<script src="/public/js/app.js"></script>
</body>
</html>