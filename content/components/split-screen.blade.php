<section class="gradient-bg{{ $reverse ? ' gradient-bg--reverse' : null }}">
    <div class="content-bg my-0">
        <div class="container">
            <div class="row align-items-center">
              @if( isset($reverse) && $reverse == true )
                  <div class="col-md-6">
                      <img src="{{ $image }}" alt="" width="100%">
                  </div>
                  <div class="col-md-6 col-lg-5">
                      <div class="block-text">
                          {{ $slot }}
                      </div>
                  </div>
              @else
                  <div class="col-md-6 col-lg-5">
                      <div class="block-text">
                          {{ $slot }}
                      </div>
                  </div>
                  <div class="col-md-6">
                      <img src="{{ $image }}" alt="" width="100%">
                  </div>
              @endif
            </div>
        </div>
    </div>
</section>
