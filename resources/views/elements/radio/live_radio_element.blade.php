<div class="player horizontal player_fixed">
    <div class="container">
        <div class="info-album-player">
            <div class="album-cover" id="bg-image3" style="background-image: url({{ env('URL_SOURCE_PROGRAM') . $current_show['PAFF_image'] }})">

            </div>
            <p class="album-title">{{$current_show['PAFF_titulo']}}</p>
            <p class="artist-name">{{$current_show['PAFF_message']}}</p>
        </div>
        <div class="player-content">
            <audio preload autoplay></audio>
            <ol class="playlist">
                <li><a href="https://rcn.radioonlinehd.net:8010/fama1025" data-src="https://rcn.radioonlinehd.net:8010/fama1025">Radio fama en vivo</a></li>
            </ol>
        </div>
    </div>
</div>

<style type="text/css">
    .player_fixed{
        position: sticky;
        margin: 0;
        position: -webkit-sticky;
        top: -1px;
        bottom: 0;
    }
</style>
<script type="text/javascript">
    // $(document).ready(function () {
    //     $('.play_button > .fa-pause').show();
    //     $('.play_button > .fa-play').hide();
    // });
    // var playing = true;
    // var radio = document.getElementById('live_player');
    //
    // $('.play_button').unbind('click').click(function () {
    //     console.log(radio.paused);
    //     toggle_radio();
    // });
    //
    // function toggle_radio() {
    //     if (radio.paused == false) {
    //         radio.pause();
    //         $('.play_button > .fa-pause').hide();
    //         $('.play_button > .fa-play').show();
    //     } else {
    //         radio.play();
    //         $('.play_button > .fa-pause').show();
    //         $('.play_button > .fa-play').hide();
    //     }
    // }
</script>