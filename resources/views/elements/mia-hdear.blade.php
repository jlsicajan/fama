@if(isset($custom_background))
    <div class="container-fluid mia-header"
         style="background-image: url('{{ env('URL_SOURCE_PROGRAM') . $custom_background  }}'); position: absolute !important;">
        <div class="row justify-content-start">
            <div class="col-md-4 d-flex flex-column justify-content-center">
                <div class="title-container border-bottom-white border-top-white py-3">
                    <h3 class="color-white display-2 font_3">{{ $title }}</h3>
                </div>
                <p class="color-white">{{ $custom_subtitle }}</p>
            </div>
            <div class="col-md-8"></div>
        </div>
    </div>
@elseif(isset($main_banner))
    <!-- INTRO -->
    <section class="intro full-width jIntro" id="anchor00">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slider-intro">
                        <div id="slides">
                            <div class="overlay"></div>
                            <div class="slides-container">
                                @foreach($main_banner as $index => $banner)
                                    <div class="carousel-item z-4 {{ $index == 0 ? 'active' : '' }}">
                                        {{--check if is main banner, to set text on the banner--}}
                                        @if(isset($banner['route']))
                                            <img src="{{ $banner['route'] }}">
                                        @else
                                            <img src="{{ $banner['route'] }}">
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="vcenter text-center text-overlay">
                <div class="logo-intro"><img src="{{ env('URL_RADIO_INFO_PATH') . \App\Radio::get_logo() }}" alt="">
                </div>
                <div id="owl-main-text" class="owl-carousel">
                    @foreach($main_texts as $primary_text)
                        <div class="item">
                            <h1 class="primary-title">{{ $primary_text }}</h1>
                        </div>
                    @endforeach
                </div>
                <h2 class="subtitle-text">Share & Promote your music online</h2>
                <div class="voffset50"></div>
                <a href="#" class="btn btn-invert">Learn more</a>
            </div>
        </div>
    </section>
@else
    <!-- INTRO -->
    <section class="intro full-width jIntro" id="anchor00">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slider-intro">
                        <div id="slides">
                            <div class="overlay"></div>
                            <div class="slides-container">
                                <img src="public/images/demo/intro/intro-slide1.jpg">
                                <img src="public/images/demo/intro/intro-slide2.jpg">
                                <img src="public/images/demo/intro/intro-slide3.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="vcenter text-center text-overlay">
                <div class="logo-intro"><img src="{{ env('URL_RADIO_INFO_PATH') . \App\Radio::get_logo() }}" alt=""></div>
                <div id="owl-main-text" class="owl-carousel">
                    <div class="item">
                        <h1 class="primary-title">Dope Beatmakers</h1>
                    </div>
                    <div class="item">
                        <h1 class="primary-title">Music is Life</h1>
                    </div>
                </div>
                <h2 class="subtitle-text">Share & Promote your music online</h2>
                <div class="voffset50"></div>
                <a href="#" class="btn btn-invert">Learn more</a>
            </div>

        </div>
    </section>

@endif
  
