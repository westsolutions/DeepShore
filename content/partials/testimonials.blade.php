<div class="swiper-container JS--testimonials-slider">
    <div class="swiper-wrapper">
        @foreach( $site->global('testimonials') as $testimonial )
        <div class="swiper-slide">
            <div class="row">
                @if( isset($testimonial['image']) )
                <div class="col-md-3 col-sm-12 d-flex justify-content-md-end d-flex justify-content-center">
                    <img src="{{ $site->asset($testimonial['image']) }}" alt="{{ $testimonial['heading'] }}" width="100%">
                </div>
                @endif
                <div class="col-md-9 col-sm-12">
                    <div class="author-text">
                        <h3>{{ $testimonial['heading'] }}</h3>

                        <p>“{!! $testimonial['quote'] !!}”</p>
                    </div>
                    <div class="author-bottom">
                        <div class="author-name">
                            {{ $testimonial['author'] }}
                            <span class="data">{{ $testimonial['date'] }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
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
