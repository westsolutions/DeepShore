@php
$address = explode("|", stripslashes($site->global()->business->address));
@endphp
<footer id="contact" class="footer">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-sm-6 col-lg-4 order-3 order-sm-2 order-lg-1 text-center d-flex">
                <div class="footer-location footer-contact-block">
                    <h3 class="title">{{ $site->trans("Find us") }}</h3>

                    <div class="location-info-list">
                        <ul>
                            <li>
                                <div class="icon-block">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </div>
                                {{ $address[0] }}<br/>{{ $address[1] }}
                            </li>
                            <li>
                                <div class="icon-block">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                                <a href="tel:{{ $site->global()->business->phone }}">
                                    {{ $site->global()->business->phone }}
                                </a>
                            </li>
                            <li>
                                <div class="icon-block">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </div>
                                <a href="mailto:{{ $site->global()->business->email }}">
                                    {{ $site->global()->business->email }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 order-1 order-sm-3 order-lg-2 d-flex">
                <div class="footer-contact footer-contact-block">
                    <h3 class="title text-center">{{ $site->trans("Contact Us") }}</h3>
                    @include('partials.contact-form')
                </div>
            </div>
            <div class="col-md-12 col-lg-4 order-2 order-sm-1 order-lg-3">
                <div class="footer-map">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="{{ $site->global()->business->map_embed }}" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom text-center">
        <p>{{ date('Y') }} &copy; {{ $site->global('site_title') }}</p>
        <a href="https://ubiweb.ca/" target="_blank" class="web">Ubiweb</a>
    </div>
</footer>
