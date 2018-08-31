{!! $site->display()->analytics() !!}

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>@yield('title', $site->global('site_title') )</title>

{!! $site->display()->favicons() !!}

<meta name="og:type" content="Website" />
<meta name="og:title" content="@yield('title', $site->global('site_title') )" />
<meta name="og:description" content="@yield('description', $site->global('site_description') )" />
<meta name="og:url" content="{{ $site->url()->current() }}" />
<meta name="og:image" content="@yield('image', $site->global('business')['image'])" />

{!! $site->display()->locationJson() !!}
{!! $site->display()->socialJson() !!}

<link rel="stylesheet" href="{{ $site->vendor('npm-asset/bootstrap/dist/css/bootstrap.min.css') }}"/>
<link rel="stylesheet" href="{{ $site->asset('main.css') }}"/>

@yield('head')
