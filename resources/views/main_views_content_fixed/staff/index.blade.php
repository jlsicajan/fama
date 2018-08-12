@extends('layouts.app')

@section('title', 'mia 93.7 el equipo')
@section('description', 'Radio mia 93.7 conoce al equipo')
@section('og_image', env('URL_RADIO_INFO_PATH') . \App\Radio::get_logo())

@section('content')
    <div class="main_content_container">
        @if(!$hide_banner)
            @include('elements.mia-hdear', ['main_banner', $main_banner])
        @endif
        <div class="container">
        @if(!$hide_banner)
            @include('elements.for_grid.space_block_header', ['classes' => ''])
        @else
            @include('elements.for_grid.space_block_navbar', ['classes' => ''])
        @endif

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

                    @foreach($staff_separated as $staff_item)
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
                                        velit, suscipit quidem fuga, magni repudiandae atque placeat sint corporis
                                        commodi
                                        praesentium dolore necessitatibus minima nemo ipsam, perspiciatis libero, quos.
                                        Obcaecati consectetur vel nostrum praesentiu.</p>
                                    <p>Obcaecati consectetur vel nostrum praesentium dolore necessitatibus minima nemo
                                        ipsam, perspiciatis libero, quos, odio quaerat asperiores repudiandae atque
                                        placeat
                                        sint corporis commodi onsectetur adipisicing elit.</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="voffset150"></div>
                </div>
            </section>

            <div class="modal fade" id="staff_modal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"></h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            {{--@include('elements.staff.card_staff', ['image_url' => $staff_item['imagen'], 'card_title' => $staff_item['orden_mostrar'], 'card_text' => $staff_item['texto'], 'staff_id' => $staff_item['id'], 'staff_name' => $staff_item['locutor']])--}}
        </div>
    </div>
    @include('elements.radio.live_radio_element')
    <script type="text/javascript">
        var staffs = {!! json_encode($staff) !!};
        var users_blog = {!! json_encode($usuarios_blog) !!};
    </script>
    <script src="/public/js/main_views/staff/staff.js"></script>
@endsection
