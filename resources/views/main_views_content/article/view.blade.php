@include('elements.for_grid.into_muziq', ['title' => $new->titulo, 'description' => $new->fuente])
<!-- POST -->
<div class="section blog single-post pattern inverse-color" id="anchor07">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <article class="post-details">
                    @if((substr($new['imagen'], 0, 3) != 'htt') && (substr($new['imagen'], 0, 2) != '//'))
                        <img class="featured-image" src="{{ env('URL_ARTICLE_PATH') . $new['imagen'] }}">
                    @else
                        <img class="featured-image" src="{{ $new['imagen'] }}">
                    @endif
                    <h4 class="title small"><span class="gray">Posted by:</span> {{ $new->fuente }} <span
                                class="right"><i class="fa fa-commenting-o"></i> </span></h4>
                    <h3 class="title post-detail">{{ $new->titulo }}</h3>
                    {!! $new->contenido !!}

                    <div class="voffset120"></div>

                    <div class="post-comments">

                        <!-- Comment -->
                    </div>

                    <div class="voffset80"></div>

                </article>
            </div>

            <div class="col-md-3">
                <div class="sidebar">

                    <div class="title small">Redes sociales</div>
                    <ul class="social">
                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li class="flickr"><a href="#"><i class="fa fa-flickr"></i></a></li>
                        <li class="tumblr"><a href="#"><i class="fa fa-tumblr"></i></a></li>
                        <li class="dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li class="youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>

                    <div class="advertisment">
                        <div class="vcenter">
                            <p>advertisiment</p>
                            <p>300 x 250</p>
                        </div>
                    </div>

                    <div class="voffset50"></div>

                    <div class="title small">Noticias recientes</div>
                    <div class="last-posts-sidebar">
                        <ul>
                            @foreach($recent_news as $recent_new)
                                <li>
                                    <a href="{{ route('new_one', $recent_new['id']) }}" class="pull-left">
                                        @if((substr($recent_new['imagen'], 0, 3) != 'htt') && (substr($recent_new['imagen'], 0, 2) != '//'))
                                            <img src="{{ env('URL_ARTICLE_PATH') . $recent_new['imagen'] }}images/demo/blog/recent-post1.jpg"
                                                 alt="{{ $recent_new['titulo'] }}">
                                        @else
                                            <img src="{{ $recent_new['imagen'] }}"
                                                 alt="{{ $recent_new['titulo'] }}">
                                        @endif
                                    </a>
                                    <div class="title-post">
                                        <div class="date">{{ date("d M Y", strtotime($recent_new['fecha'])) }}</div>
                                        <p>{{ $recent_new['titulo'] }}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script src="/public/js/nav_movements.js"></script>
