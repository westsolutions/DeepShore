<div class="btn-group">
    @foreach( $site->languages('routes') as $lang => $url )
        <a href="{{ $url }}">{{ strtoupper($lang) }}</a>
    @endforeach
</div>
