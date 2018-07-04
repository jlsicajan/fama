@extends('layouts.app')

@section('title', 'fama 102.5')
@section('description', 'Radio fama 102.5 salta a la fama')
@section('og_image', env('URL_RADIO_INFO_PATH') . \App\Radio::get_logo())

@section('head')
@endsection

@section('content')
    <div class="main_content_container">
    @include('elements.mia-hdear', [])
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
    </div>
@endsection

@section('scripts')
@endsection