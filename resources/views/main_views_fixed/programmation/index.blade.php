@extends('layouts.app')

@section('content')
    <div class="main_content_container">
        <!-- INTRO -->
        <section class="intro intro-mini full-width jIntro bg-blog" id="anchor00">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h1 class="primary-title">Programacion</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- TOUR DATES -->
        <section class="section full-width inverse-color tourdates" id="anchor05">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="voffset70"></div>
                        <div class="separator-icon">
                            <i class="fa fa-microphone"></i>
                        </div>
                        <div class="voffset30"></div>
                        <h2 class="title">Programacion actual</h2>
                        <div class="voffset80"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="image-tour"></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="tour-info">
                            <ul class="carousel-dates jcarouselDates">
                                <li class="gallery-cell" id="tour1">
                                    <div class="vcenter">
                                        <p class="name-tour">Built<br>to spill</p>
                                        <p class="separator">live</p>
                                        <p class="subtitle-tour">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum atque tempore
                                            iste.</p>
                                        <p class="buy">
                                            <a href="#" class="btn rounded icon"><i class="fa fa-ticket"></i> buy ticket</a>
                                        </p>
                                    </div>
                                </li>
                                <li class="gallery-cell" id="tour2">
                                    <div class="vcenter">
                                        <p class="name-tour">Show in las Vegas</p>
                                        <p class="separator">live</p>
                                        <p class="subtitle-tour">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum atque tempore
                                            iste.</p>
                                        <p class="buy">
                                            <a href="#" class="btn rounded icon"><i class="fa fa-ticket"></i> buy ticket</a>
                                        </p>
                                    </div>
                                </li>
                                <li class="gallery-cell" id="tour3">
                                    <div class="vcenter">
                                        <p class="name-tour">Live in New York</p>
                                        <p class="separator">live</p>
                                        <p class="subtitle-tour">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum atque tempore
                                            iste.</p>
                                        <p class="buy">
                                            <a href="#" class="btn rounded icon"><i class="fa fa-ticket"></i> buy ticket</a>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <ul class="dates-tour button-group">
                                <li class="button active">
                                    november
                                    <span>09</span>
                                </li>
                                <li class="button">
                                    november
                                    <span>08</span>
                                </li>
                                <li class="button">
                                    november
                                    <span>01</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- UPCOMMING EVENTS -->
        <section class="section full-width upcomming-events-list inverse-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h4 class="upcomming-events-list-title">Programacion semanal</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            @foreach($week_programation['active'] as $programation_on_day)
                                @foreach($programation_on_day[3] as $each_programation)
                                    <li>
                                        <div>
                                            <p class="date-event"><span>{{ $programation_on_day[1] }}</span></p>
                                            <p class="name">
                                                <span>{{ $each_programation->Titulo }}</span>
                                                {{ strip_tags($each_programation->Contenido) }}
                                            </p>
                                            <p class="venue">
                                                horario
                                                <span>{{ $each_programation->inicio . ' - ' . $each_programation->fin }}</span>
                                            </p>
                                            <p class="buy">
                                                <a href="#" class="btn rounded icon"><i class="fa fa-dot-circle-o"></i>
                                                    Leer más</a>
                                            </p>
                                        </div>
                                    </li>
                                @endforeach
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('elements.radio.live_radio_element')
    <script type="text/javascript">
        var week_shows = {!! json_encode($week_programation) !!};
    </script>
    <script src="/public/js/main_views/programmation/app.js"></script>

@endsection