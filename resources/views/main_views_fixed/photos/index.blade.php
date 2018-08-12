@extends('layouts.app')

@section('content')
    <div class="main_content_container">
    @include('elements.mia-hdear', ['main_texts' => array('FOTOS', 'GALERIA')])
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
                            @if(isset($photos) && !empty($photos))
                                @foreach($photos as $photo)
                                    <div class="thumbnail small music">
                                        <a href="{{ env('URL_SOURCE_MULTIMEDIA_1') . $photo['nombre'] }}" class="swipebox">
                                            <img src="{{ env('URL_SOURCE_MULTIMEDIA_1') . $photo['nombre'] }}" alt="">
                                            <div class="rollover">
                                                <i class="plus"></i>
                                            </div>
                                        </a>
                                    </div>
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
    <style type="text/css">
        .grid-photo-block {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
@endsection