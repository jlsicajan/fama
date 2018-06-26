{{--*/ $route = Request::route()->getName() /*--}}
<li class="nav-item">
    <button class="ajax_link nav-link {{ ($route == 'home') ? 'active' : '' }}" data-href="{{ route('home') }}">INICIO
    </button>
</li>
@foreach(App\Category::list_for_menu() as $category)
    <span class="text-muted">|</span><li class="nav-item dropdown">
        @if(empty($category['subcategories']))
            <button class="ajax_link nav-link {{ Request::is('contenido/' . $category['id'] . '/0' ) ? 'active' : '' }}"
                    data-href="{{ route('content', [$category['id'], 0]) }}">
                {{ $category['nombre'] }}
            </button>
        @else
            <a class="nav-link dropdown-toggle" href="https://bootstrapthemes.co" id="categories_multimenu"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ $category['nombre'] }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="categories_multimenu">
                @foreach($category['subcategories'] as $subcategory)
                    <li class="nav-item">
                        <button class="ajax_link dropdown-item-mia dropdown-item {{ Request::is('contenido/' . $category['id'] . '/' . $subcategory['id']) ? 'active' : '' }}"
                                data-href="{{ route('content', [$category['id'], $subcategory['id']]) }}">
                            {{ $subcategory['nombre'] }}
                        </button>
                    </li>
                @endforeach
            </ul>
        @endif
    </li>
@endforeach

<!-- HEADER -->
<header id="jHeader">
    <nav class="navbar navbar-default" role="navigation">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Desplegar navegación</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#anchor00"><img src="images/logo.png" alt="logo"></a>
        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse" id="navbar-muziq">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#anchor00">Home</a></li>
                <li><a href="#anchor07">News</a></li>
                <li><a href="#anchor02">Artists</a></li>
                <li><a href="#anchor03">About</a></li>
                <li><a href="#anchor04">Albums</a></li>
                <li><a href="#anchor05">Gigs</a></li>
                <li><a href="#anchor06">Gallery</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="#anchor08">Contact</a></li>
            </ul>
        </div>

    </nav>
</header>