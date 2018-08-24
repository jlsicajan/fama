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

<script type="text/javascript">
    var week_shows = {!! json_encode($week_programation) !!};
</script>
<script src="/public/js/main_views/programmation/app.js"></script>
<script src="/public/js/nav_movements.js"></script>