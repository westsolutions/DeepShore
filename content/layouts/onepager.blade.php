<!DOCTYPE html>
<html lang="{{ $lang }}">
    <head>
    	@include("partials.head")
    </head>

    <body>
        <div class="sidenav js-sidenav">
            <a href="javascript:void(0)" class="closebtn js-close">&times;</a>
            <ul>
                <li>
                    <a href="#">about</a>
                    <ul>
                        <li>
                            <a href="#" class="active">Quisque Id</a>
                        </li>
                        <li>
                            <a href="#">Tempor Libero</a>
                        </li>
                        <li>
                            <a href="#">Vivamus Nulla</a>
                        </li>
                        <li>
                            <a href="#">Augue</a>
                        </li>
                        <li>
                            <a href="#">Semper</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">services</a>
                </li>
                <li>
                    <a href="#" class="btn btn-danger btn-sm btn-mobile">Contact</a>
                </li>
            </ul>
        </div>
        <!-- mobile menu -->

        <section class="fixed-top">
            <div class="header-info">
                <div class="container">
                    <div class="d-flex justify-content-between">
                        <ul class="nav">
                            <li class="nav-item d-flex">
                                <a class="nav-link " href="tel:">
                                    {{-- {{ $site->global->business->phone }} --}} phone
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="mailto:">
                                    {{-- {{ $site->global->business->email }} --}} email
                                </a>
                            </li>
                        </ul>
                        @include('partials.language-switcher')
                    </div>
                </div>
            </div>
            <header class="header-menu">
                <div class="container">
                    <div class="d-flex justify-content-between">
                        <a href="{{ $site->url('home') }}">
                            <img src="{{ $site->asset('img/logo.jpg') }}" alt="">
                        </a>

                        <button type="button" class="mobile-burger d-block d-sm-none js-burger">
                            <span class="burger-bar"></span>
                            <span class="burger-bar"></span>
                            <span class="burger-bar"></span>
                            <span class="burger-bar burger-bar--half"></span>
                        </button>

                        <nav class="d-sm-block d-none">
                            {!! $site->display()->menu(
                                'onepager',
                                ['class' => 'header-menu-block d-flex'],
                                ['class' => 'menu-sub']
                            ) !!}

                            {{-- <ul class="header-menu-block d-flex">
                                <li>
                                    <a href="#">about</a>
                                    <ul class="menu-sub">
                                        <li>
                                            <a href="#">Quisque Id</a>
                                        </li>
                                        <li>
                                            <a href="#">Tempor Libero</a>
                                        </li>
                                        <li>
                                            <a href="#">Vivamus Nulla</a>
                                        </li>
                                        <li>
                                            <a href="#">Augue</a>
                                        </li>
                                        <li>
                                            <a href="#">Semper</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">services</a>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-danger btn-sm">Contact</a>
                                </li>
                            </ul> --}}
                        </nav>
                    </div>
                </div>
            </header>
        </section>

        <div id="content" class="site-content">
    		@yield('content')
    	</div>

        @include("partials.footer")

        <script
            src="https://code.jquery.com/jquery-3.3.1.slim.js"
            integrity="sha256-fNXJFIlca05BIO2Y5zh1xrShK3ME+/lYZ0j+ChxX2DA="
            crossorigin="anonymous">
        </script>
        <script src="{{ $site->asset('js/swiper.min.js') }}"></script>
        <script src="{{ $site->asset('js/js.js') }}"></script>

        @yield('foot')

		@stack('scripts')
    </body>
</html>
