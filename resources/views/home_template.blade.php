@extends('layouts.app')

@section('title', 'fama 102.5')
@section('description', 'Radio fama 102.5 salta a la fama')
@section('og_image', env('URL_RADIO_INFO_PATH') . \App\Radio::get_logo())

@section('head')
@endsection

@section('content')
    <div class="main_content_container">
    @include('elements.mia-hdear', ['main_texts' => array('INICIO', 'FAMA')])

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
                        <p class="pretitle">noticias</p>
                        <div class="voffset20"></div>
                        <h2 class="title">Lo mas nuevo</h2>
                        <div class="voffset80"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        @foreach($news as $new)
                            <article class="post-item">
                                <div class="row">
                                    <div class="col-sm-6">
                                        @if((substr($new['imagen'], 0, 3) != 'htt') && (substr($new['imagen'], 0, 2) != '//'))

                                            <div class="photo-post" id="{{ $new['id'] }}"
                                                 style="background-image: url({{ env('URL_ARTICLE_PATH') . $new['imagen'] }});"></div>
                                        @else
                                            <div class="photo-post" id="{{ $new['id'] }}"
                                                 style="background-image: url({{ $new['imagen'] }});"></div>
                                        @endif
                                        <p class="date">
                                            <span class="day">{{ date("d", strtotime($new['fecha'])) }}</span>
                                            <span class="month">{{ date("M", strtotime($new['fecha'])) }}</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="voffset30"></div>
                                        <h4 class="title small">
                                            <span>Fecha:</span> {{ date("d M Y", strtotime($new['fecha'])) }}</h4>
                                        <h3 class="title post">{{ $new['titulo'] }}</h3>
                                        <p>{{ \App\Article::limit_words(strip_tags($new['contenido']), 60) }}</p>
                                        <a href="{{ route('new_one', $new['id']) }}" class="btn rounded">Lee más</a>
                                    </div>
                                    <section class="section news-window">
                                        <div class="news-content"></div><!-- AJAX Dinamic Content -->
                                    </section>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- TWITTER -->
        <section class="section twitterfeed inverse-color full-width parallax-section"
                 data-parallax-image="/public/images/demo/twitter/bg-twitter.jpg">
            <a href="https://twitter.com/fama1025?lang=es" target="_blank">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <i class="fa fa-twitter"></i>
                            <div id="twitter-feed"></div>
                        </div>
                    </div>
                </div>
            </a>
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
                        <p class="pretitle">Proximos estrenos</p>
                        <div class="voffset20"></div>
                        <h2 class="title">Cartelera</h2>
                        <div class="voffset80"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="voffset20"></div>
                        <div class="js-flickity"
                             data-flickity-options="{ &quot;cellAlign&quot;: &quot;left&quot;, &quot;wrapAround&quot;: true, &quot;contain&quot;: true, &quot;prevNextButtons&quot;: false }">
                            @if(isset($movies) && !empty($movies))
                                @foreach($movies as $movie)
                                    <div class="gallery-cell col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                        <div class="featured-artist">
                                            <div class="image">
                                                <img src="{{ env('URL_SOURCE_CINEMA') .  $movie['imagen'] }}" alt="">
                                            </div>
                                            <div class="rollover">
                                                <ul class="social">
                                                    <li><a href="{{ $movie['url_youtube'] }}" target="_blank"><i class="fa fa-youtube"></i></a></li>
                                                </ul>
                                                <div class="text">
                                                    <p class="title-artist">{{ $movie['titulo'] }}</p>
                                                    <p>{{ \App\Article::limit_words(strip_tags($movie['sinopsis']), 25) }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <div class="voffset120"></div>
            </div>
        </section>
        @include('elements.radio.live_radio_element')
    </div>
@endsection

@section('scripts')
@endsection) }}