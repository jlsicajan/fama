@extends('layouts.app')

@section('title', 'fama 102.5')
@section('description', 'Radio fama 102.5 salta a la fama')
@section('og_image', env('URL_RADIO_INFO_PATH') . \App\Radio::get_logo())

@section('head')
@endsection

@section('content')
    <div class="main_content_container">
        @include('elements.mia-hdear', ['main_banner', $main_banner])
        <div class="container">
            @include('elements.for_grid.space_block_header', ['classes' => 'z-0'])
        </div>
    </div>
@endsection

@section('scripts')
@endsection