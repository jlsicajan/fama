@extends('layouts.app')

@section('title', 'Rafio fama')
@section('description', 'Radio fama 102.5 conoce al equipo')
@section('og_image', env('URL_RADIO_INFO_PATH') . \App\Radio::get_logo())

@section('content')
    <div class="main_content_container">
    @include('elements.for_grid.into_muziq', ['title' => $cine->titulo, 'description' => ''])
    <!-- POST -->
        <div class="section blog single-post pattern inverse-color" id="anchor07">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <article class="post-details">
                            <img class="featured-image" src="{{ env('URL_SOURCE_CINEMA') .  $cine->imagen }}">

                            <h3 class="title post-detail">{{ $cine->titulo }}</h3>
                            {!! $cine->sinopsis !!}

                            <div class="voffset120"></div>
                            @if(!empty($cine->url_youtube))
                                <iframe class="embed-responsive-item" width="100%" height="470px"
                                        src="{{ str_replace(array('https://youtu.be/', 'https://www.youtube.com/watch?v='), 'https://youtube.be/embed/', $cine->url_youtube) }}?rel=0&autoplay=0&autohide=2&border=0&wmode=opaque&enablejsapi=1&modestbranding=1&controls=1&showinfo=0"
                                        frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

                            @endif
                        </article>
                    </div>

                    <div class="col-md-3">
                        <div class="sidebar">

                            <div class="title small">Buscar</div>
                            <div class="input-group search">
                                <input type="text" class="form-control" placeholder="Ingrese palabra clave">
                                <span class="input-group-btn">
                                  <button type="button">
                                    <i class="fa fa-search"></i>
                                  </button>
                                </span>
                            </div>

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

                            <div class="title small">instagram feed</div>
                            <div class="instagram-feed">
                                <ul>
                                    <li><img src="images/demo/blog/instagram1.jpg" alt=""></li>
                                    <li><img src="images/demo/blog/instagram2.jpg" alt=""></li>
                                    <li><img src="images/demo/blog/instagram3.jpg" alt=""></li>
                                    <li><img src="images/demo/blog/instagram4.jpg" alt=""></li>
                                    <li><img src="images/demo/blog/instagram5.jpg" alt=""></li>
                                    <li><img src="images/demo/blog/instagram6.jpg" alt=""></li>
                                </ul>
                            </div>

                            <div class="title small">Tags</div>
                            <div class="list-tags">
                                <ul>
                                    <li><a href="#">web design</a></li>
                                    <li><a href="#">development</a></li>
                                    <li><a href="#">css</a></li>
                                    <li><a href="#">studio</a></li>
                                    <li><a href="#">award</a></li>
                                    <li><a href="#">mobile</a></li>
                                    <li><a href="#">ios</a></li>
                                    <li><a href="#">ui / ux</a></li>
                                    <li><a href="#">portfolio</a></li>
                                </ul>
                            </div>

                            <div class="title small">Comments</div>
                            <ul class="menu-sidebar">
                                <li class="active">recent</li>
                                <li>popular</li>
                            </ul>
                            <div class="last-comments">
                                <ul>
                                    <li>
                                        <div class="header-comment">
                                            <a href="#" class="pull-left">
                                                <img src="images/demo/blog/comments1.jpg" alt="">
                                            </a>
                                            <div class="title-post">
                                                <div class="date">1 hour ago</div>
                                                <p>Ethan Martin say:</p>
                                            </div>
                                        </div>
                                        <div class="comment">
                                            <p>“ Thanks so much for the awesome customer service. So many companies,
                                                large and small, have a lot to learn from you. Great job! ”</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="header-comment">
                                            <a href="#" class="pull-left">
                                                <img src="images/demo/blog/comments2.jpg" alt="">
                                            </a>
                                            <div class="title-post">
                                                <div class="date">1 hour ago</div>
                                                <p>Ethan Martin say:</p>
                                            </div>
                                        </div>
                                        <div class="comment">
                                            <p>“ Thanks so much for the awesome customer service. So many companies,
                                                large and small, have a lot to learn from you. Great job! ”</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="header-comment">
                                            <a href="#" class="pull-left">
                                                <img src="images/demo/blog/comments3.jpg" alt="">
                                            </a>
                                            <div class="title-post">
                                                <div class="date">1 hour ago</div>
                                                <p>Ethan Martin say:</p>
                                            </div>
                                        </div>
                                        <div class="comment">
                                            <p>“ Thanks so much for the awesome customer service. So many companies,
                                                large and small, have a lot to learn from you. Great job! ”</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="title small"><i class="fa fa-twitter"></i> Twitter widget</div>
                            <div class="last-tweets">
                                <ul>
                                    <li>
                                        <div class="header-comment">
                                            <a href="#" class="pull-left">
                                                <img src="images/demo/blog/tweet.jpg" alt="">
                                            </a>
                                            <div class="title-post">
                                                <div class="date">‏@EnvatoMarket 1h</div>
                                                <p>Envato Market</p>
                                            </div>
                                        </div>
                                        <div class="tweet">
                                            <p>“ Thanks so much for the awesome customer service. So many companies,
                                                large and small, have a lot to learn from you. Great job! ”</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="header-comment">
                                            <a href="#" class="pull-left">
                                                <img src="images/demo/blog/tweet.jpg" alt="">
                                            </a>
                                            <div class="title-post">
                                                <div class="date">‏@EnvatoMarket 1h</div>
                                                <p>Envato Market</p>
                                            </div>
                                        </div>
                                        <div class="tweet">
                                            <p>“ Thanks so much for the awesome customer service. So many companies,
                                                large and small, have a lot to learn from you. Great job! ”</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="header-comment">
                                            <a href="#" class="pull-left">
                                                <img src="images/demo/blog/tweet.jpg" alt="">
                                            </a>
                                            <div class="title-post">
                                                <div class="date">‏@EnvatoMarket 1h</div>
                                                <p>Envato Market</p>
                                            </div>
                                        </div>
                                        <div class="tweet">
                                            <p>“ Thanks so much for the awesome customer service. So many companies,
                                                large and small, have a lot to learn from you. Great job! ”</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('elements.radio.live_radio_element', ['current_show' => $current_show])
    <script src="/public/js/nav_movements.js"></script>
@endsection
