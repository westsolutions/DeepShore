@extends('layouts.onepager')

@section('content')

	@component('components.hero', ['image' => $site->asset('img/hero-bg.png'), 'site' => $site ])
		<h3 class="hero-sub-title">
			Quality Marine Construction &amp; Erosion Control Solutions
		</h3>

		<h1 class="hero-title">
			Deep Shore Marine Contracting Inc
		</h1>
	@endcomponent
	{{-- <section class="hero d-flex" style="background-image: url('img/hero-bg.png')">
	    <div class="container d-flex align-items-center justify-content-center">
	        <div class="hero-text text-center">
	            <h3 class="hero-sub-title">
	                Quality Marine Construction &amp; Erosion Control Solutions
	            </h3>

	            <h1 class="hero-title">
	                Deep Shore Marine Contracting Inc
	            </h1>
	        </div>
	    </div>
	    <img src="{{ $site->asset('img/hero-bottom.svg') }}" class="hero-deco">
	</section> --}}

	<section id="about" class="gradient-bg">
	    <div class="section-content">
	        <div class="container">
	            <div class="row justify-content-center">
	                <div class="col-lg-9">
	                    <div class="content-block-wrapper text-center">
	                        <h2 class="section-title">
	                            Water access makes all the difference
	                        </h2>

	                        <p class="section-text">
	                            Deep Shore Marine Contracting offers quality marine construction and erosion control solutions
	                            employing
	                            water access to residential and commercial clients throughout the Ottawa and Eastern Ontario
	                            region. With
	                            our specialized equipment and over 25 years of experience we can undertake marine construction
	                            and erosion
	                            control projects both large and small. Our comprehensive services also include septic system
	                            installations,
	                            general excavation and landscaping. We take pride in completing our projects in a timely and
	                            environmentally
	                            responsible manner.
	                        </p>
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
	            <h2 class="section-title">
	                Our services
	            </h2>

	            <div class="d-flex flex-md-row flex-column">
	                <div class="icons-block flex-fill">
	                    <div class="img-block">
	                        <img src="{{ $site->asset('img/pen.svg') }}" alt="">
	                    </div>
	                    <h4>
	                        Class aptent
	                    </h4>
	                </div>
	                <div class="icons-block flex-fill">
	                    <div class="img-block">
	                        <img src="{{ $site->asset('img/atom.svg') }}" alt="">
	                    </div>
	                    <h4>
	                        taciti sociosqu
	                    </h4>
	                </div>
	                <div class="icons-block flex-fill">
	                    <div class="img-block">
	                        <img src="{{ $site->asset('img/planet.svg') }}" alt="">
	                    </div>
	                    <h4>
	                        litora torquent
	                    </h4>
	                </div>
	                <div class="icons-block flex-fill">
	                    <div class="img-block">
	                        <img src="{{ $site->asset('img/chart.svg') }}" alt="">
	                    </div>
	                    <h4>
	                        conubia nostra
	                    </h4>
	                </div>
	                <div class="icons-block flex-fill">
	                    <div class="img-block">
	                        <img src="{{ $site->asset('img/apple.svg') }}" alt="">
	                    </div>
	                    <h4>
	                        Vivamus
	                    </h4>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>

	<section class="gradient-bg">
	    <div class="content-bg my-0">
	        <div class="container">
	            <div class="row align-items-center">
	                <div class="col-md-6">
	                    <img src="{{ $site->asset('img/img-content.png') }}" alt="" width="100%">
	                </div>
	                <div class="col-md-6 col-lg-5">
	                    <div class="block-text">
	                        <h2 class="title">
	                            Lorem Ipsum
	                        </h2>

	                        <p>
	                            Ut enim neque, sagittis non nisi et, aliquet cursus ligula. Cras commodo ligula mi, at fermentum
	                            est sagittis nec. Phasellus mattis lacus a tristique vulputate. Nulla posuere, ligula ac
	                            suscipit rhoncus, leo justo egestas nunc, sed fringilla metus nisl porttitor ex. Fusce ac dolor
	                            sit amet urna placerat pretium vel accumsan ipsum.
	                        </p>
	                        <a class="btn btn-lg btn-outline-white block-text-btn" href="#">
	                            Learn more
	                        </a>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>

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
						<a class="btn btn-lg btn-outline-danger" href="#">
							Learn more
						</a>
					</div>
					@endcomponent
	                {{-- <div class="items">
	                    <div class="img-container">
	                        <img src="{{ $site->asset('img/dock.png') }}" alt="">
	                    </div>
	                    <div class="content-container">
	                        <div class="content-block">
	                            <h3 class="title">Nulla pharetra</h3>

	                            <p>Sed finibus molestie sem, eu molestie ipsum imperdiet consequat. Maecenas purus velit.</p>
	                        </div>
	                        <div class="button-container">
	                            <a class="btn btn-lg btn-outline-danger" href="#">
	                                Learn more
	                            </a>
	                        </div>
	                    </div>
	                </div> --}}
	            </div>
	            <div class="col-sm-6 col-lg-4">
					@component('components.card', [
						'image' => ['src' => $site->asset('img/dock.png'), 'alt' => ''],
						'title' => 'Nulla pharetra'
					])
					<p>Sed finibus molestie sem, eu molestie ipsum imperdiet consequat. Maecenas purus velit.</p>

					<div class="button-container">
						<a class="btn btn-lg btn-outline-danger" href="#">
							Learn more
						</a>
					</div>
					@endcomponent
	            </div>
	            <div class="col-sm-6 col-lg-4">
					@component('components.card', [
						'image' => ['src' => $site->asset('img/dock.png'), 'alt' => ''],
						'title' => 'Nulla pharetra'
					])
					<p>Sed finibus molestie sem, eu molestie ipsum imperdiet consequat. Maecenas purus velit.</p>

					<div class="button-container">
						<a class="btn btn-lg btn-outline-danger" href="#">
							Learn more
						</a>
					</div>
					@endcomponent
	            </div>
	            <div class="col-sm-6 col-lg-4">
					@component('components.card', [
						'image' => ['src' => $site->asset('img/dock.png'), 'alt' => ''],
						'title' => 'Nulla pharetra'
					])
					<p>Sed finibus molestie sem, eu molestie ipsum imperdiet consequat. Maecenas purus velit.</p>

					<div class="button-container">
						<a class="btn btn-lg btn-outline-danger" href="#">
							Learn more
						</a>
					</div>
					@endcomponent
	            </div>
	            <div class="col-sm-6 col-lg-4">
					@component('components.card', [
						'image' => ['src' => $site->asset('img/dock.png'), 'alt' => ''],
						'title' => 'Nulla pharetra'
					])
					<p>Sed finibus molestie sem, eu molestie ipsum imperdiet consequat. Maecenas purus velit.</p>

					<div class="button-container">
						<a class="btn btn-lg btn-outline-danger" href="#">
							Learn more
						</a>
					</div>
					@endcomponent
	            </div>
	            <div class="col-sm-6 col-lg-4">
					@component('components.card', [
						'image' => ['src' => $site->asset('img/dock.png'), 'alt' => ''],
						'title' => 'Nulla pharetra'
					])
					<p>Sed finibus molestie sem, eu molestie ipsum imperdiet consequat. Maecenas purus velit.</p>

					<div class="button-container">
						<a class="btn btn-lg btn-outline-danger" href="#">
							Learn more
						</a>
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
	                            <h2>
	                                Consectetur adipiscing elit.
	                            </h2>

	                            <p>
	                                Aenean convallis ultrices diam eu vehicula. Fusce ac est turpis. Pellentesque a posuere mi.
	                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at vulputate felis, sit amet
	                                lobortis nisl.
	                            </p>
	                        </div>
	                    </div>
	                    <div class="col-md-6">
	                        <div class="section-block-items">
	                            <div class="block-items">
	                                <div class="block-items-text border-items">
	                                    <div class="items-number">
	                                        <span class="counter">1</span>
	                                    </div>
	                                    <h3 class="title">
	                                        Lorem Ipsum
	                                    </h3>

	                                    <p>
	                                        Nulla posuere, ligula ac suscipit rhoncus, leo justo egestas nunc, sed fringilla
	                                        metus nisl porttitor ex.
	                                    </p>
	                                </div>
	                            </div>
	                            <div class="block-items">
	                                <div class="block-items-text border-items">
	                                    <div class="items-number">
	                                       <span class="counter">2</span>
	                                    </div>
	                                    <h3 class="title">
	                                        Sed Finibus
	                                    </h3>

	                                    <p>
	                                        Fusce ac dolor sit amet urna placerat pretium vel accumsan ipsum.
	                                    </p>
	                                </div>
	                            </div>
	                            <div class="block-items">
	                                <div class="block-items-text">
	                                    <div class="items-number">
	                                        <span class="counter">3</span>
	                                    </div>
	                                    <h3 class="title">
	                                        Maecenas purus
	                                    </h3>

	                                    <p>
	                                        Posuere, ligula ac suscipit rhoncus, leo dolor sit amet urna placerat pretium vel
	                                        accumsan ipsum.
	                                    </p>
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
	        <div class="swiper-container JS--testimonials-slider">
	            <div class="swiper-wrapper">
	                <div class="swiper-slide">
	                    <div class="row">
	                        <div class="col-md-3 col-sm-12 d-flex justify-content-md-end d-flex justify-content-center">
	                            <img src="{{ $site->asset('img/author-img.png') }}" alt="" width="100%">
	                        </div>
	                        <div class="col-md-9 col-sm-12">
	                            <div class="author-text">
	                                <h3>
	                                    Testimonials
	                                </h3>

	                                <p>
	                                    “Lorem ipsum dolor <strong><em>sit amet,</em></strong> consectetur adipiscing elit. Aenean at
	                                    erat metus nam maximus lorem id <strong><em>dui hendrerit.</em></strong>”
	                                </p>
	                            </div>
	                            <div class="author-bottom">
	                                <div class="author-name">
	                                    Class taciti
	                                    <span class="data">May 2018</span>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="swiper-slide">
	                    <div class="row">
	                        <div class="col-md-3 col-sm-12 d-flex justify-content-md-end d-flex justify-content-center">
	                            <img src="{{ $site->asset('img/author-img.png') }}" alt="" width="100%">
	                        </div>
	                        <div class="col-md-9 col-sm-12">
	                            <div class="author-text">
	                                <h3>
	                                    Testimonials
	                                </h3>

	                                <p>
	                                    “Lorem ipsum dolor <strong><em>sit amet,</em></strong> consectetur adipiscing elit. Aenean at
	                                    erat metus nam maximus lorem id <strong><em>dui hendrerit.</em></strong>”
	                                </p>
	                            </div>
	                            <div class="author-bottom">
	                                <div class="author-name">
	                                    Class taciti
	                                    <span class="data">May 2018</span>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="swiper-slide">
	                    <div class="row">
	                        <div class="col-md-3 col-sm-12 d-flex justify-content-md-end d-flex justify-content-center">
	                            <img src="{{ $site->asset('img/author-img.png') }}" alt="" width="100%">
	                        </div>
	                        <div class="col-md-9 col-sm-12">
	                            <div class="author-text">
	                                <h3>
	                                    Testimonials
	                                </h3>

	                                <p>
	                                    “Lorem ipsum dolor <strong><em>sit amet,</em></strong> consectetur adipiscing elit. Aenean at
	                                    erat metus nam maximus lorem id <strong><em>dui hendrerit.</em></strong>”
	                                </p>
	                            </div>
	                            <div class="author-bottom">
	                                <div class="author-name">
	                                    Class taciti
	                                    <span class="data">May 2018</span>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <!-- Add Arrows -->
	        </div>
	        <div class="row">
	            <div class="col-md-3">

	            </div>
	            <div class="col-md-9">
	                <div class="slider-author-line"></div>
	                <div class="swiper-buttons-container">
	                    <div class="swiper-button-prev swiper-btn">
	                        <div class="slider-arrow"></div>
	                    </div>
	                    <div class="swiper-button-next swiper-btn">
	                        <div class="slider-arrow"></div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>

@endsection
