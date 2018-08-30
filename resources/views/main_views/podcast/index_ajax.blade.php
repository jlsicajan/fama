<div class="main_content_container">
    <!-- INTRO -->
    <section class="intro intro-mini full-width jIntro bg-blog" id="anchor00">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h1 class="primary-title">Podcast</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section upcomming-events pattern" id="anchor01">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="voffset70"></div>
                    <div class="separator-icon">
                        <i class="fa fa-microphone"></i>
                    </div>
                    <div class="voffset30"></div>
                    <div class="voffset20"></div>
                    <h2 class="title">ESCUCHALOS</h2>
                    <div class="voffset80"></div>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="player horizontal">
                        <div class="container">
                            <div class="player-content">
                                <audio preload></audio>
                                <ol class="playlist">
                                    @foreach($the20 as $plus)
                                        @if(!empty($plus['audio']) && !empty($plus['imagen']))
                                            <li><a href="#" data-src="{{ env('URL_SOURCE_MULTIMEDIA') . $plus['audio'] }}">{{ $plus['artista'] }} - {{ $plus['nombre'] }}</a></li>
                                        @endif
                                    @endforeach
                                </ol>
                                <div class="nextprev">
                                    <span class="prev">prev</span>
                                    <span class="next">next</span>
                                </div>
                                <span class="btnloop">loop</span>
                            </div>
                        </div>
                    </div>
                    <div class="voffset80"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="upevents" style="position: relative; height: 1845.5px;">
                        @foreach($the20 as $plus)
                            @if(!empty($plus['audio']) && !empty($plus['imagen']))
                                <div class="upevent" style="position: absolute; left: 0px; top: 0px;">
                                    <div class="contain">
                                        <div class="bg-image"
                                             style="background-image: url({{ env('URL_SOURCE_MULTIMEDIA') . $plus['imagen'] }})"></div>
                                        <div class="content">
                                            <div class="voffset80"></div>
                                            <div class="date"></div>
                                            <div class="separator tag"><span>{{ $plus['artista'] }}</span></div>
                                            <p>{{ $plus['nombre'] }}</p>
                                            <div class="title">{{ $plus['orden'] }}</div>
                                            <div class="voffset70"></div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="/public/js/main_views/the20/the20.js"></script>
<script src="/public/js/nav_movements.js"></script>
