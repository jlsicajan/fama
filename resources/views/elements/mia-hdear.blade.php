@if(isset($custom_background))
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
                                    {{--check if is main banner, to set text on the banner--}}
                                    @if(isset($banner['route']))
                                        <img src="{{ $banner['route'] }}">
                                    @else
                                        <img src="{{ $banner['route'] }}">
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vcenter text-center text-overlay">
                <div id="owl-main-text" class="owl-carousel">
                    @foreach($main_banner as $index => $banner)
                        <div class="item">
                            <h1 class="primary-title">{{ $banner['data']['texto_1'] }}</h1>
                            <h2 class="subtitle-text">{{ $banner['data']['texto_2'] }}</h2>
                            <div class="voffset50"></div>
                            @if(!empty($banner['data']['link']))
                                <a href="{{ $banner['data']['link'] }}" class="btn btn-invert">Conoce más</a>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
@else

@endif
  
