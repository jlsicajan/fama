@extends('layouts.app')

@section('content')
    <div class="main_content_container">
        <!-- INTRO -->
        <section class="intro intro-mini full-width jIntro bg-blog" id="anchor00">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h1 class="primary-title">Cine</h1>
                        </div>
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
    </div>
    @include('elements.radio.live_radio_element')
    <style type="text/css">
        .grid-photo-block {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
@endsection