@extends('layouts.app')

@section('title', 'Rafio fama')
@section('description', 'Radio fama 102.5 conoce al equipo')
@section('og_image', env('URL_RADIO_INFO_PATH') . \App\Radio::get_logo())

@section('content')
    <div class="main_content_container">
    @include('elements.for_grid.into_muziq', ['title' => $cine->titulo, 'description' => ''])
    <!-- POST -->
        <div class="section blog single-post pattern inverse-color" id="anchor07">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <article class="post-details">
                            <img class="featured-image" src="{{ env('URL_SOURCE_CINEMA') .  $cine->imagen }}">

                            <h3 class="title post-detail">{{ $cine->titulo }}</h3>
                            {!! $cine->sinopsis !!}

                            <div class="voffset120"></div>
                            @if(!empty($cine->url_youtube))
                                <iframe class="embed-responsive-item" width="100%" height="470px"
                                        src="{{ str_replace(array('https://youtu.be/', 'https://www.youtube.com/watch?v='), 'https://youtube.be/embed/', $cine->url_youtube) }}?rel=0&autoplay=0&autohide=2&border=0&wmode=opaque&enablejsapi=1&modestbranding=1&controls=1&showinfo=0"
                                        frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

                            @endif
                        </article>
                    </div>

                    <div class="col-md-3">
                        <div class="sidebar">

                            <div class="title small">Redes sociales</div>
                            <ul class="social">
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>

                            <div class="voffset50"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('elements.radio.live_radio_element', ['current_show' => $current_show])
    <script src="/public/js/nav_movements.js"></script>
@endsection
