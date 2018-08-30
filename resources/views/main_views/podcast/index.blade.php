@extends('layouts.app')
@section('title', 'Fama')
@section('description', 'Fama')
@section('og_image', env('URL_RADIO_INFO_PATH') . \App\Radio::get_logo())

@section('content')
    <div class="main_content_container">
        <!-- INTRO -->
        <section class="intro intro-mini full-width jIntro bg-blog" id="anchor00">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h1 class="primary-title">Podcast</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section upcomming-events pattern" id="anchor01">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="voffset70"></div>
                        <div class="separator-icon">
                            <i class="fa fa-microphone"></i>
                        </div>
                        <div class="voffset30"></div>
                        <div class="voffset20"></div>
                        <h2 class="title">ESCUCHALOS</h2>
                        <div class="voffset80"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="upevents" style="position: relative; height: 1845.5px;">
                            @foreach($the20 as $plus)
                                @if(!empty($plus['audio']) && !empty($plus['imagen']))
                                    <div class="upevent" style="position: absolute; left: 0px; top: 0px;">
                                        <div class="contain">
                                            <div class="bg-image"
                                                 style="background-image: url({{ env('URL_SOURCE_MULTIMEDIA') . $plus['imagen'] }})"></div>
                                            <div class="content">
                                                <div class="voffset80"></div>
                                                <div class="date"></div>
                                                <div class="separator tag"><span>{{ $plus['artista'] }}</span></div>
                                                <p>{{ $plus['nombre'] }}</p>
                                                <div class="title">{{ $plus['orden'] }}</div>
                                                <div class="">
                                                    <audio class="no_audiojs" id="{{ $plus['orden'] }}"><source src="{{ env('URL_SOURCE_MULTIMEDIA') . $plus['audio'] }}" type="audio/mp3">Your browser does not support the audio element.</audio>
                                                    <button  data-is-playing="0" data-for-music='{{ $plus['orden'] }}' class="no_audiojs_button play_button color-white" type="button">
                                                        <i class="fa fa-play color-white"></i><i class="fa fa-pause"></i>
                                                    </button>
                                                </div>
                                                <div class="voffset70"></div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('elements.radio.live_radio_element')

    <script src="/public/js/main_views/the20/the20.js"></script>
@endsection