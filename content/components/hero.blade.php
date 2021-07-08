<div class="hero d-flex{{ isset($class) ? " $class" : '' }}" style="background-image:url({{ $image }})">
    <div class="container d-flex align-items-center justify-content-center">
        <div class="hero-text text-center">
    		{{ $slot }}
        </div>
	</div>
    <div class="hero-bottom">
        <div class="triangle-left"></div>
        <div class="triangle-right"></div>
    </div>
</div>
