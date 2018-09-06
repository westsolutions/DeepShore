<!DOCTYPE html>
<html lang="{{ $lang }}">
    <head>
    	@include("partials.head")
    </head>

    <body>
        @include("partials.header")

        <div id="content" class="site-content">
    		    @yield('content')
        </div>

        @include("partials.footer")

        <script src="{{ $site->vendor('npm-asset/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ $site->vendor('npm-asset/swiper/dist/js/swiper.min.js') }}"></script>
        <script src="{{ $site->vendor('npm-asset/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ $site->vendor('npm-asset/ekko-lightbox/dist/ekko-lightbox.min.js') }}"></script>

        <script src="{{ $site->asset('js/custom.js') }}"></script>

        @yield('foot')
        @stack('scripts')
    </body>
</html>
