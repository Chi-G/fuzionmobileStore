<footer class="footer_area bg_cover" style="background-image: url({{ asset('images/footer_bg.jpg') }})">
    <div class="footer_widget pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="footer_about mt-30">
                        <a href="{{ route('home') }}"><img src="{{ asset('logo.png') }}" alt="FuzionMobile Logo"></a>
                        <p>Fuzion Mobile is dedicated to revolutionizing mobile technology with innovative products and services.</p>
                        <ul class="footer_social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="footer_widget_wrapper d-flex flex-wrap">
                        <div class="footer_link mt-30">
                            <h5 class="footer_title">Quick Links</h5>
                            <div class="footer_link_wrapper d-flex">
                                <ul class="link">
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li><a href="{{ route('events') }}">Events</a></li>
                                    <li><a href="{{ route('products') }}">Store</a></li>
                                </ul>
                                <ul class="link">
                                    <li><a href="{{ route('team') }}">Our Team</a></li>
                                    <li><a href="{{ route('posts') }}">Latest News</a></li>
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                    <li><a href="{{ route('services') }}">Services</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer_contact mt-30">
                            <h5 class="footer_title">Contact</h5>
                            <ul class="contact">
                                <li>Location: 123 Innovation Drive, Tech City, USA</li>
                                <li>Email: <a href="mailto:support@fuzionmobile.com">support@fuzionmobile.com</a></li>
                                <li>Phone: <a href="tel:+12025550123">+1 (202) 555-0123</a></li>
                                <li>Fax: +1 (202) 555-0124</li>
                                <li><a href="https://maps.google.com" target="_blank">View Location on Google Map</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Subscription Form -->
                    <div class="footer_subscribe mt-30 text-center">
                        <h5 class="footer_title">Stay Updated</h5>
                        <form action="{{ route('subscribe') }}" method="POST" class="d-flex justify-content-center">
                            @csrf
                            <input type="email" name="email" placeholder="Enter your email" class="form-control px-4 py-2 rounded-l-md border-0 bg-gray-700 text-white placeholder-gray-400 focus:ring-2 focus:ring-blue-500" required>
                            <button type="submit" class="btn btn-primary px-4 py-2 rounded-r-md">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_copyright">
        <div class="container">
            <div class="footer_copyright_wrapper text-center d-md-flex justify-content-between">
                <div class="copyright text-gray-200">
                    <a href="{{ route('terms') }}" class="text-gray-200">Term</a> |
                    <a href="{{ route('privacy') }}" class="text-gray-200">Privacy</a>
                </div>
                <div class="copyright">
                    <p>© {{ date('Y') }} FuzionMobile. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
