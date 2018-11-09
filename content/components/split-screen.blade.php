<div class="gradient-bg">
    <div class="content-bg{{ $reverse ? ' content-bg--reverse' : null }} my-0">
        <div class="container">
            <div class="row align-items-center">
                @if( isset($reverse) && $reverse == true )
                <div class="col-md-6 wow animate slideInLeft" style="background-image:url({{ $image }}); background-position: center center; background-size: cover; display: flex; justify-content: center; align-items: center; min-height: 40vh;">
                </div>
                <div class="col-md-6">
                    <div class="block-text">
                        {{ $slot }}
                    </div>
                </div>
                @else
                <div class="col-md-6">
                    <div class="block-text">
                        {{ $slot }}
                    </div>
                </div>
                <div class="col-md-6 wow animate slideInRight" style="background-image:url({{ $image }}); background-position: center center; background-size: cover; display: flex; justify-content: center; align-items: center; min-height: 40vh;">
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
