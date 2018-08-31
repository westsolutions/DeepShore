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

    <script
        src="https://code.jquery.com/jquery-3.3.1.slim.js"
        integrity="sha256-fNXJFIlca05BIO2Y5zh1xrShK3ME+/lYZ0j+ChxX2DA="
        crossorigin="anonymous">
    </script>
    <script src="{{ $site->asset('js/swiper.min.js') }}"></script>
    <script src="{{ $site->asset('js/js.js') }}"></script>
		<script src="{{ $site->asset('js/custom.js') }}"></script>

    @yield('foot')

		@stack('scripts')
    </body>
</html>
