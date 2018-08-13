@extends('layouts.app')

@section('title', 'Rafio fama')
@section('description', 'Radio fama 102.5 conoce al equipo')
@section('og_image', env('URL_RADIO_INFO_PATH') . \App\Radio::get_logo())

@section('content')
    <div class="main_content_container">
        <div class="container">

            @if(isset($movies[0]) && !empty($movies[0]))
                @foreach($movies[0] as $movies_left)
                    @include('elements.cinema.billboard', ['position' => 'left', 'movie' => $movies_left, 'gradient' => 1])
                @endforeach
            @endif


        </div>
    </div>
    @include('elements.radio.live_radio_element')
    <script src="/public/js/nav_movements.js"></script>
@endsection
