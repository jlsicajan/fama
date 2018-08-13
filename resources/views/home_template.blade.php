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

                                            <div class="photo-post" id="{{ $new['id'] }}" style="background-image: url({{ env('URL_ARTICLE_PATH') . $new['imagen'] }});"></div>
                                        @else
                                            <div class="photo-post" id="{{ $new['id'] }}" style="background-image: url({{ $new['imagen'] }});"></div>
                                        @endif
                                        <p class="date">
                                            <span class="day">{{ date("d", strtotime($new['fecha'])) }}</span>
                                            <span class="month">{{ date("M", strtotime($new['fecha'])) }}</span>
                                        </p>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="voffset30"></div>
                                        <h4 class="title small"><span>Fecha:</span> {{ date("d M Y", strtotime($new['fecha'])) }}</h4>
                                        <h3 class="title post">{{ $new['titulo'] }}</h3>
                                        <p>{{ \App\Article::limit_words(strip_tags($new['contenido']), 60) }}</p>
                                        <a href="{{ $new['link'] }}" target="_blank" class="btn rounded">Lee más</a>
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

        @include('elements.radio.live_radio')
    </div>
@endsection

@section('scripts')
@endsection) }}