<footer class="footer">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-sm-6 col-lg-4 order-3 order-sm-2 order-lg-1 text-center d-flex">
                <div class="footer-location footer-contact-block">
                    <h3 class="title">
                        Find us
                    </h3>

                    <div class="location-info-list">
                        <ul>
                            <li>
                                <div class="icon-block">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </div>
                                43 rue Donec Ipsum Justo <br> QC J9H 3L2
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
                    <h3 class="title text-center">
                        Contact Us
                    </h3>
                    @include('partials.contact-form')
                    {{-- <form>

                        <div class="group">
                            <input type="text" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Name</label>
                        </div>

                        <div class="group">
                            <input type="email" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Email</label>
                        </div>

                        <div class="group textarea-group JS--textarea">
                            <textarea name="" id="contact-message" rows="3"></textarea>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Message</label>
                        </div>

                        <button type="submit" class="btn btn-lg btn-outline-white footer-btn">Send</button>

                    </form> --}}

                </div>
            </div>
            <div class="col-md-12 col-lg-4 order-2 order-sm-1 order-lg-3">
                @if( isset($site->global()->business->latitude) && isset($site->global()->business->longitude) )
                    @include("partials.map")
                @endif
                {{-- <div class="footer-map">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d8415.538453758762!2d-71.08463445545809!3d42.33306999875818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1suk!2sua!4v1535101874101" allowfullscreen></iframe>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="footer-bottom text-center">
        <p>
            2018 © {{ $site->global('site_title') }}
        </p>
        <a href="#" class="web">
            ubiweb
        </a>
    </div>
</footer>
