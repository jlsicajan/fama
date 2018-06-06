@if(!$hide_banner)
    @include('elements.mia-hdear', ['main_banner', $main_banner])
@endif
<link href="/public/css/main_views/the20.css" rel="stylesheet">
<div class="container">
    @if(!$hide_banner)
        @include('elements.for_grid.space_block_header', ['classes' => ''])
    @else
        @include('elements.for_grid.space_block_navbar', ['classes' => ''])
    @endif

    <div class="row justify-content-center">
        @foreach($the20 as $plus)
            @if(!empty($plus['audio']) && !empty($plus['imagen']))
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    @include('elements.the20.simple_player', ['gradient' => 1, 'music' => $plus])
                </div>
            @endif
        @endforeach
    </div>
</div>
<style type="text/css">
    .bg-grid-secondary{
        background: linear-gradient(to bottom right, #bd3188, #e2008c) !important;
    }
</style>
<script src="/public/js/main_views/the20/the20.js"></script>
<script src="/public/js/nav_movements.js"></script>
