<div class="btn-group">
    @foreach( $site->languages('routes') as $lang => $url )
        @if( $site->getLang() !== $lang )
            <a href="{{ $url }}">{{ strtoupper($lang) }}</a>
        @endif
    @endforeach
</div>
