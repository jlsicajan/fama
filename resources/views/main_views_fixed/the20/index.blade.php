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
                            <h1 class="primary-title">Los 20</h1>
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>

    </div>
    @include('elements.radio.live_radio_element')

    <script src="/public/js/main_views/the20/the20.js"></script>
@endsection