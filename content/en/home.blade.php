@extends('layouts.main')

@section('content')

	@component('components.hero', ['image' => $site->asset('img/hero-bg.png'), 'site' => $site ])
		<h3 class="hero-sub-title">New template for sites. Packed full of flexible components.</h3>

		<h1 class="hero-title">Contractor Template</h1>
	@endcomponent

	<section id="about" class="gradient-bg">
	    <div class="section-content">
	        <div class="container">
	            <div class="row justify-content-center">
	                <div class="col-lg-9">
	                    <div class="content-block-wrapper text-center">
	                        <h2 class="section-title">Introduction</h2>

	                        <p class="section-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
	                        <a class="btn btn-danger btn-xl section-content-button" href="#">Learn more</a>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>

	<section id="services" class="gradient-bg">
	    <div class="section-icon-blocks">
	        <div class="container text-center">
	            <h2 class="section-title">Our Services</h2>

	            <div class="d-flex flex-md-row flex-column">
	                <a class="icons-block flex-fill" href="#">
	                    <div class="img-block">
	                        <img src="{{ $site->asset('img/pen.svg') }}" alt="">
	                    </div>
	                    <h4>Class aptent</h4>
	                </a>
	                <div class="icons-block flex-fill">
	                    <div class="img-block">
	                        <img src="{{ $site->asset('img/atom.svg') }}" alt="">
	                    </div>
	                    <h4>taciti sociosqu</h4>
	                </div>
	                <div class="icons-block flex-fill">
	                    <div class="img-block">
	                        <img src="{{ $site->asset('img/planet.svg') }}" alt="">
	                    </div>
	                    <h4>litora torquent</h4>
	                </div>
	                <div class="icons-block flex-fill">
	                    <div class="img-block">
	                        <img src="{{ $site->asset('img/chart.svg') }}" alt="">
	                    </div>
	                    <h4>conubia nostra</h4>
	                </div>
	                <div class="icons-block flex-fill">
	                    <div class="img-block">
	                        <img src="{{ $site->asset('img/apple.svg') }}" alt="">
	                    </div>
	                    <h4>Vivamus</h4>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>

	@component('components.split-screen', [
		'reverse' => true,
		'image' => $site->asset('img/img-content.png')
	])
	<h2 class="title">Lorem Ipsum</h2>

	<p>Ut enim neque, sagittis non nisi et, aliquet cursus ligula. Cras commodo ligula mi, at fermentum est sagittis nec. Phasellus mattis lacus a tristique vulputate. Nulla posuere, ligula ac suscipit rhoncus, leo justo egestas nunc, sed fringilla metus nisl porttitor ex. Fusce ac dolor sit amet urna placerat pretium vel accumsan ipsum.</p>

	<a class="btn btn-lg btn-outline-white block-text-btn" href="#">Learn more</a>
	@endcomponent

	<section id="specialties" class="section-items">
	    <div class="container text-center">
	        <h2 class="section-title">specialties</h2>

	        <div class="row">
	            <div class="col-sm-6 col-lg-4">
					@component('components.card', [
						'image' => ['src' => $site->asset('img/dock.png'), 'alt' => ''],
						'title' => 'Nulla pharetra'
					])
					<p>Sed finibus molestie sem, eu molestie ipsum imperdiet consequat. Maecenas purus velit.</p>

					<div class="button-container">
						<a class="btn btn-lg btn-outline-danger" href="#">Learn more</a>
					</div>
					@endcomponent
	            </div>
	            <div class="col-sm-6 col-lg-4">
					@component('components.card', [
						'image' => ['src' => $site->asset('img/boathouse.png'), 'alt' => ''],
						'title' => 'Nulla pharetra'
					])
					<p>Sed finibus molestie sem, eu molestie ipsum imperdiet consequat. Maecenas purus velit.</p>

					<div class="button-container">
						<a class="btn btn-lg btn-outline-danger" href="#">Learn more</a>
					</div>
					@endcomponent
	            </div>
	            <div class="col-sm-6 col-lg-4">
					@component('components.card', [
						'image' => ['src' => $site->asset('img/septic.png'), 'alt' => ''],
						'title' => 'Nulla pharetra'
					])
					<p>Sed finibus molestie sem, eu molestie ipsum imperdiet consequat. Maecenas purus velit.</p>

					<div class="button-container">
						<a class="btn btn-lg btn-outline-danger" href="#">Learn more</a>
					</div>
					@endcomponent
	            </div>
	            <div class="col-sm-6 col-lg-4">
					@component('components.card', [
						'image' => ['src' => $site->asset('img/erosion.png'), 'alt' => ''],
						'title' => 'Nulla pharetra'
					])
					<p>Sed finibus molestie sem, eu molestie ipsum imperdiet consequat. Maecenas purus velit.</p>

					<div class="button-container">
						<a class="btn btn-lg btn-outline-danger" href="#">Learn more</a>
					</div>
					@endcomponent
	            </div>
	            <div class="col-sm-6 col-lg-4">
					@component('components.card', [
						'image' => ['src' => $site->asset('img/landscape.png'), 'alt' => ''],
						'title' => 'Nulla pharetra'
					])
					<p>Sed finibus molestie sem, eu molestie ipsum imperdiet consequat. Maecenas purus velit.</p>

					<div class="button-container">
						<a class="btn btn-lg btn-outline-danger" href="#">Learn more</a>
					</div>
					@endcomponent
	            </div>
	            <div class="col-sm-6 col-lg-4">
					@component('components.card', [
						'image' => ['src' => $site->asset('img/excavation.png'), 'alt' => ''],
						'title' => 'Nulla pharetra'
					])
					<p>Sed finibus molestie sem, eu molestie ipsum imperdiet consequat. Maecenas purus velit.</p>

					<div class="button-container">
						<a class="btn btn-lg btn-outline-danger" href="#">Learn more</a>
					</div>
					@endcomponent
	            </div>
	        </div>
	    </div>
	</section>

	<section class="step-line-section">
	    <div class="container">
	        <div class="row justify-content-center">
	            <div class="col-lg-9">
	                <div class="section-hero-img">
	                    <img src="{{ $site->asset('img/section-img.png') }}" alt="" width="100%">
	                </div>
	                <div class="row">
	                    <div class="col-md-6">
	                        <div class="section-block-text">
	                            <h2>Consectetur adipiscing elit.</h2>

	                            <p>Aenean convallis ultrices diam eu vehicula. Fusce ac est turpis. Pellentesque a posuere mi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at vulputate felis, sit amet lobortis nisl.</p>
	                        </div>
	                    </div>
	                    <div class="col-md-6">
	                        <div class="section-block-items">
	                            <div class="block-items">
	                                <div class="block-items-text border-items">
	                                    <div class="items-number">
	                                        <span class="counter">1</span>
	                                    </div>
	                                    <h3 class="title">Lorem Ipsum</h3>

	                                    <p>Nulla posuere, ligula ac suscipit rhoncus, leo justo egestas nunc, sed fringilla metus nisl porttitor ex.</p>
	                                </div>
	                            </div>
	                            <div class="block-items">
	                                <div class="block-items-text border-items">
	                                    <div class="items-number">
	                                       <span class="counter">2</span>
	                                    </div>
	                                    <h3 class="title">Sed Finibus</h3>

	                                    <p>Fusce ac dolor sit amet urna placerat pretium vel accumsan ipsum.</p>
	                                </div>
	                            </div>
	                            <div class="block-items">
	                                <div class="block-items-text">
	                                    <div class="items-number">
	                                        <span class="counter">3</span>
	                                    </div>
	                                    <h3 class="title">Maecenas purus</h3>

	                                    <p>Posuere, ligula ac suscipit rhoncus, leo dolor sit amet urna placerat pretium vel accumsan ipsum.</p>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>

	<section id="testimonials" class="section-bg testimonials-slider-section">
	    <div class="container">
	        @include('partials.testimonials')
	    </div>
	</section>

@endsection
