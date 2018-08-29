<div class="items">
    @if( $image )
    <div class="img-container">
        <img src="{{ $image['src'] }}" alt="{{ $image['alt'] }}">
    </div>
    @endif
    <div class="content-container">
        <div class="content-block">
            @if( $title )
            <h3 class="title">{{ $title }}</h3>
            @endif
            
            {{ $slot }}
        </div>
    </div>
</div>
