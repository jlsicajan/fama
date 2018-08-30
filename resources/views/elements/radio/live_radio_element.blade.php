<div class="player horizontal player_fixed">
    <div class="container">
        <div class="info-album-player">
            <div class="album-cover" id="bg-image3" style="background-image: url({{ env('URL_SOURCE_PROGRAM') . $current_show['PAFF_image'] }})">

            </div>
            <p class="album-title">{{\App\Helpers\RadioUtil::limit_words( $current_show['PAFF_titulo'], 2) . "."}}</p>
            <p class="artist-name">{{$current_show['PAFF_start']}} - {{$current_show['PAFF_end']}}</p>
        </div>
        <div class="player-content">
            <audio class="live_radio_for_audiojs" preload="auto">
                <source class="live_rad" src="https://rcn.radioonlinehd.net:8010/fama1025" type="audio/mp3"/>
            </audio>
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