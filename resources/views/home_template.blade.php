@extends('layouts.app')

@section('title', 'fama 102.5')
@section('description', 'Radio fama 102.5 salta a la fama')
@section('og_image', env('URL_RADIO_INFO_PATH') . \App\Radio::get_logo())

@section('head')
@endsection

@section('content')
    @include('elements.mia-hdear', ['main_texts' => array('INICIO', 'FAMA')])

    <div class="main_content_container">
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
                                        <a href="" data-href="{{ route('new_one', $new['id']) }}" class="btn rounded ajax_link">Lee más</a>
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
                 data-parallax-image="http://jellydemos.com/html/muziq/muziq-electronic/images/demo/twitter/bg-twitter.jpg"
                 style="background-image: url('http://jellydemos.com/html/muziq/muziq-electronic/images/demo/twitter/bg-twitter.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <i class="fa fa-twitter"></i>
                        <div id="twitter-feed">
                            <ul class="slider-twitter flickity-enabled is-draggable" tabindex="0">
                                <div class="user">
                                    <a data-scribe="element:user_link"
                                       href="https://twitter.com/fama1025"
                                       aria-label="Nightcrawler Music (screen name: FAMA)"
                                       target="_blank">
                                        <img data-scribe="element:avatar"
                                             data-src-2x="https://pbs.twimg.com/profile_images/707595080027250688/pOk10G2v_bigger.jpg"
                                             alt=""
                                             data-src-1x="https://pbs.twimg.com/profile_images/707595080027250688/pOk10G2v_normal.jpg"
                                             src="https://pbs.twimg.com/profile_images/707595080027250688/pOk10G2v_bigger.jpg">
                                    </a>


                                    <div data-scribe="component:author">
                                        <a data-scribe="element:user_link"
                                           href="https://twitter.com/fama1025"
                                           aria-label="Nightcrawler Music (screen name: FAMA)"
                                           target="_blank">
                                            <div>
                                                <span style="text-align: center !important;" title="@fama1025s"
                                                      data-scribe="element:screen_name">@fama1025</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FEATURED RELASES -->
        <section class="section featured-shop pattern">
            <div class="container pattern">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="voffset70"></div>
                        <div class="separator-icon">
                            <i class="fa fa-microphone"></i>
                        </div>
                        <div class="voffset30"></div>
                        <p class="title">Cartelera</p>
                        <div class="voffset80"></div>
                    </div>
                </div>
                <div class="row">
                    @if(isset($movies) && !empty($movies))
                        @foreach($movies as $movie)
                            <div class="col-lg-3 col-md-4 col-xs-6">
                                <div class="shop-item">
                                    <div class="cover">
                                        <img src="{{ env('URL_SOURCE_CINEMA') .  $movie['imagen'] }}" alt="">
                                        <div class="rollover">
                                            <p><a href="" data-href="{{ route('cine_one', $movie['id']) }}" class="btn rounded icon ajax_link"><i
                                                            class="fa fa-plus"></i> Leer más</a></p>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <hr>
                                        <p class="artist">{{ $movie['titulo'] }}</p>
                                        <p>{{ \App\Article::limit_words(strip_tags($movie['sinopsis']), 25) }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
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
                        <p class="pretitle">Programacion de hoy</p>
                        <div class="voffset20"></div>
                        <h2 class="title">Proximos programaas</h2>
                        <div class="voffset80"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="carousel-discography js-flickity"
                            data-flickity-options='{ "cellAlign": "left", "wrapAround": true, "contain": true, "prevNextButtons": false }'>
                            <!-- col-xlg-3 -->
                            @foreach($todays_shows as $today_show)
                                <li class="gallery-cell col-xs-12 col-sm-6 col-md-4">
                                    <div class="info-album">
                                        <div class="cover open-disc" data-url="discs/disc-01.html">
                                            <img src="{{ env('URL_SOURCE_PROGRAM') . $today_show->Imagen }}" alt="">
                                            <div class="rollover">
                                                <i class="fa fa-plus"></i>
                                                <p>Leer más</p>
                                            </div>
                                        </div>
                                        <p class="album">{{ $today_show->inicio . ' - ' . $today_show->fin }}</p>
                                        <p class="artist">{{ $today_show->Titulo }}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <div class="voffset90"></div>
                    </div>
                </div>
            </div>
            <!-- DETAILS DISCO -->
            <div id="project-show"></div>
            <div class="section player-album project-window">
                <div class="project-content"></div><!-- AJAX Dinamic Content -->
            </div>
        </section>
    </div>
    @include('elements.radio.live_radio_element')
@endsection

@section('scripts')
@endsection