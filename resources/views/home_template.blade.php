@extends('layouts.app')

@section('title', 'fama 102.5')
@section('description', 'Radio fama 102.5 salta a la fama')
@section('og_image', env('URL_RADIO_INFO_PATH') . \App\Radio::get_logo())

@section('head')
@endsection

@section('content')
    <div class="main_content_container">
    @include('elements.mia-hdear', ['main_texts' => array('INICIO', 'FAMA')])
    @include('elements.radio.live_radio')
    </div>
@endsection

@section('scripts')
@endsection) }}