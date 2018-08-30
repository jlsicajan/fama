@extends('layouts.app')

@section('content')
    <div class="main_content_container">
        <!-- INTRO -->
        <section class="intro intro-mini full-width jIntro bg-blog" id="anchor00">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h1 class="primary-title">Galeria</h1>
                        </div>
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
                        <p class="pretitle">Las imagenes mas recientes</p>
                        <div class="voffset20"></div>
                        <h2 class="title">Fotos</h2>
                        <div class="voffset50"></div>
                    </div>
                </div>
                <!-- Filters -->
                <div class="row">
                    <div class="col-md-12">
                        <ul class="filters">
                            @foreach($albums as $album)
                                <li data-filter=".{{ $album->id }}" class="wow fadeInUp"
                                    data-wow-delay="0.5s">{{ $album->nombre }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- gallery -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="voffset50"></div>
                        <div class="thumbnails">
                            @if(isset($photos) && !empty($photos))
                                @foreach($photos as $identifier => $album_key)
                                    @foreach($album_key as $photo)
                                        <div class="thumbnail small {{ $identifier }}">
                                            <a href="{{ env('URL_UPLOADS_GENERAL_PATH') . 'album_' . $identifier . '/' . $photo['nombre'] }}"
                                               class="swipebox">
                                                <img src="{{ env('URL_UPLOADS_GENERAL_PATH') . 'album_' . $identifier. '/'   . $photo['nombre'] }}"
                                                     alt="">
                                                <div class="rollover">
                                                    <i class="plus"></i>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                @endforeach
                            @endif
                        </div>
                        <div class="voffset80"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('elements.radio.live_radio_element')
@endsection