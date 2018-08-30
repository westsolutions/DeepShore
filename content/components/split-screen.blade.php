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
