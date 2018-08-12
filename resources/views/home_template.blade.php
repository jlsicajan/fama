@extends('layouts.app')

@section('title', 'fama 102.5')
@section('description', 'Radio fama 102.5 salta a la fama')
@section('og_image', env('URL_RADIO_INFO_PATH') . \App\Radio::get_logo())

@section('head')
@endsection

@section('content')
    <div class="main_content_container">
    @include('elements.mia-hdear', ['main_texts' => array('INICIO', 'FAMA')])
    <!-- BIOGRAPHY -->
        <section class="section biography inverse-color" id="anchor03">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="voffset70"></div>
                        <div class="separator-icon">
                            <i class="fa fa-microphone"></i>
                        </div>
                        <div class="voffset30"></div>
                        <p class="pretitle">About the band</p>
                        <div class="voffset20"></div>
                        <h2 class="title">biography</h2>
                        <div class="voffset110"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <img src="images/demo/biography/biography.jpg" alt="">
                    </div>
                    <div class="col-lg-6">
                        <div class="voffset50"></div>
                        <div class="quote">
                            <p>"If I can play one note and make you cry, then that's better than thouse fancy
                                dancers playing twenty notes."</p>
                            <p class="author">Robbie Robertson</p>
                        </div>
                        <div class="description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam iure blanditiis
                                velit, suscipit quidem fuga, magni repudiandae atque placeat sint corporis commodi
                                praesentium dolore necessitatibus minima nemo ipsam, perspiciatis libero, quos.
                                Obcaecati consectetur vel nostrum praesentiu.</p>
                            <p>Obcaecati consectetur vel nostrum praesentium dolore necessitatibus minima nemo
                                ipsam, perspiciatis libero, quos, odio quaerat asperiores repudiandae atque placeat
                                sint corporis commodi onsectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="voffset150"></div>
            </div>
        </section>
        @include('elements.radio.live_radio')
    </div>
@endsection

@section('scripts')
@endsection) }}