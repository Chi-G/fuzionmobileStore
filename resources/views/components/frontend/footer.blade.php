<footer class="footer_area bg_cover" style="background-image: url({{ asset('images/footer_bg.jpg') }})">
    <div class="footer_widget pt-80 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="footer_about mt-50">
                        <a href="{{ route('home') }}"><img src="{{ asset('logo.png') }}" alt="FuzionMobile Logo"></a>
                        <p>FuzionMobile is dedicated to revolutionizing learning through innovative technology.</p>
                        <ul class="footer_social">
                            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="footer_widget_wrapper d-flex flex-wrap">
                        <div class="footer_link mt-50">
                            <h5 class="footer_title">Quick Links</h5>
                            <div class="footer_link_wrapper d-flex">
                                <ul class="link">
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('about.index') }}">About Us</a></li>
                                    <li><a href="{{ route('services.index') }}">Services</a></li>
                                    <li><a href="{{ route('events.index') }}">Events</a></li>
                                    <li><a href="{{ route('products.index') }}">Store</a></li>
                                </ul>
                                <ul class="link">
                                    <li><a href="{{ route('team.index') }}">Our Team</a></li>
                                    <li><a href="{{ route('posts.index') }}">Latest News</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer_contact mt-50">
                            <h5 class="footer_title">Contact</h5>
                            <ul class="contact">
                                <li>Location: 27 State, New York, NY 1002, USA</li>
                                <li>Email: <a href="mailto:info@example.com">info@example.com</a></li>
                                <li>Phone: <a href="tel:+1321948754">+(321)948 754</a></li>
                                <li>Fax: +1-212-98765543</li>
                                <li><a href="#">View Location on Google Map</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_copyright">
        <div class="container">
            <div class="footer_copyright_wrapper text-center d-md-flex justify-content-between">
                <div class="copyright">
                    <p>Designed & Developed with Love</p>
                </div>
                <div class="copyright">
                    <p>© {{ date('Y') }} FuzionMobile. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
