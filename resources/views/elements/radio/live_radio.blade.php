<div class="row flex-column @if($position == 'right') align-items-start ml-0 @else align-items-end @endif mb-28px">
    <div class="grid-header col-12 {{ isset($classes) ? $classes : '' }}">
        <span class="font_2 color-white font_2_grid"> {{ $title }}</span>
        @if(isset($gradient) && $gradient)
            <div class="gradient float-right"></div>
        @endif
    </div>
    <div class="grid-block-sm bg-grid-default col-12 d-flex align-items-center justify-content-around">
        <audio autoplay id="live_player">
            <source src="" type="audio/mp3">
            Your browser does not support the audio element.
        </audio>

        <button class="play_button" type="button"><i class="fa fa-play"></i><i class="fa fa-pause"></i></button>
        <button class="vol_down" onclick="document.getElementById('live_player').volume -= 0.1">Vol -</button>
        <button class="vol_up" onclick="document.getElementById('live_player').volume += 0.1">Vol +</button>
    </div>
</div>

<!-- PLAYER -->
<div class="player horizontal">
    <div class="container">
        <div class="info-album-player">
            <div class="album-cover" id="bg-image3"></div>
            <p class="album-title">Spectrum</p>
            <p class="artist-name">Album by Blummsday</p>
        </div>
        <div class="player-content">
            <audio preload></audio>
            <ol class="playlist">
                <li><a href="#" data-src="mp3/01preview_mp3.mp3">Black home</a></li>
                <li><a href="#" data-src="mp3/02preview_mp3.mp3">Lord pretty</a></li>
                <li><a href="#" data-src="mp3/03Hip_Hop_Music_by_Boxbeats_preview.mp3">Better things</a></li>
            </ol>
            <div class="nextprev">
                <span class="prev">prev</span>
                <span class="next">next</span>
            </div>
            <span class="btnloop">loop</span>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('.play_button > .fa-pause').show();
        $('.play_button > .fa-play').hide();
    });
    var playing = true;
    var radio = document.getElementById('live_player');

    $('.play_button').unbind('click').click(function () {
        console.log(radio.paused);
        toggle_radio();
    });

    function toggle_radio() {
        if (radio.paused == false) {
            radio.pause();
            $('.play_button > .fa-pause').hide();
            $('.play_button > .fa-play').show();
        } else {
            radio.play();
            $('.play_button > .fa-pause').show();
            $('.play_button > .fa-play').hide();
        }
    }
</script>