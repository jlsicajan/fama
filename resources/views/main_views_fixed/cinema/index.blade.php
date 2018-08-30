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
        <!-- FEATURED RELASES -->
        <section class="section featured-shop">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="voffset70"></div>
                        <div class="separator-icon">
                            <i class="fa fa-microphone"></i>
                        </div>
                        <div class="voffset30"></div>
                        <p class="pretitle">Cartelera</p>
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
                                            <p><a href="" data-href="{{ route('cine_one', $movie['id']) }}" class="btn rounded icon ajax_link"><i class="fa fa-plus"></i> Leer más</a></p>
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

    </div>
    @include('elements.radio.live_radio_element', ['current_show' => $current_show])
@endsection