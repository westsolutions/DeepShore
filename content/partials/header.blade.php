<div class="sidenav js-sidenav">
    <a href="javascript:void(0)" class="closebtn js-close">&times;</a>
    {!! $site->display()->menu(
        'main'
    ) !!}
</div>
<!-- mobile menu -->

<section class="fixed-top">
    <div class="header-info">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <ul class="nav">
                    <li class="nav-item d-flex">
                        <a class="nav-link" href="tel:{{ $site->global()->business->phone }}">
                            {{ $site->global()->business->phone }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mailto:{{ $site->global()->business->email }}">
                            {{ $site->global()->business->email }}
                        </a>
                    </li>
                </ul>
                @include('partials.language-switcher')
            </div>
        </div>
    </div>
    <header class="header-menu">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <a href="{{ $site->url('home') }}">
                    <img src="{{ $site->asset('img/ubiweb-logo.png') }}" alt="{{ $site->global('site_title') }}">
                </a>

                <button type="button" class="mobile-burger d-block d-sm-none js-burger">
                    <span class="burger-bar"></span>
                    <span class="burger-bar"></span>
                    <span class="burger-bar"></span>
                    <span class="burger-bar burger-bar--half"></span>
                </button>

                <nav class="d-sm-block d-none">
                    {!! $site->display()->menu(
                        'main',
                        ['class' => 'header-menu-block d-flex'],
                        ['class' => 'menu-sub']
                    ) !!}
                </nav>
            </div>
        </div>
    </header>
</section>
