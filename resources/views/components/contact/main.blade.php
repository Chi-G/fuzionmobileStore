<section class="contact_area pt-80 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="contact_form mt-40">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="section_title pb-30">
                                <h3 class="main_title">Get in Touch</h3>
                                <p>Reach out to us for any inquiries or support. We're here to help you succeed.</p>
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single_form">
                                    <input type="text" name="name" placeholder="Name" value="{{ old('name') }}" class="@error('name') is-invalid @enderror">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single_form">
                                    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" class="@error('email') is-invalid @enderror">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single_form">
                                    <input type="text" name="subject" placeholder="Subject" value="{{ old('subject') }}" class="@error('subject') is-invalid @enderror">
                                    @error('subject')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single_form">
                                    <input type="text" name="number" placeholder="Phone Number" value="{{ old('number') }}" class="@error('number') is-invalid @enderror">
                                    @error('number')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single_form">
                                    <textarea name="message" placeholder="Message" class="@error('message') is-invalid @enderror">{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single_form">
                                    <button type="submit" class="main-btn">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact_info pt-20">
                    <ul>
                        <li>
                            <div class="single_info d-flex align-items-center mt-30">
                                <div class="info_icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="info_content media-body">
                                    <p>{{ config('company.address', 'Fulladu Publishers, opposite UTG MDI Road, KMC, The Gambia.') }}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="single_info d-flex align-items-center mt-30">
                                <div class="info_icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="info_content media-body">
                                    <p>{{ config('company.phone', '+220-2530620') }}</p>
                                    <p>{{ config('company.secondary_phone', '+2203285061') }}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="single_info d-flex align-items-center mt-30">
                                <div class="info_icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="info_content media-body">
                                    <p>{{ config('company.email', 'info@e-learning.gm') }}</p>
                                    <p>{{ config('company.support_email', 'info@e-learning.gm') }}</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="contact_map mt-50">
                    <div class="gmap_canvas">
                        <iframe id="gmap_canvas" src="{{ config('company.map_url', 'https://maps.google.com/maps?q=Mission%20District%2C%20San%20Francisco%2C%20CA%2C%20USA&t=&z=13&ie=UTF8&iwloc=&output=embed') }}" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
        @php
            \Log::info('Contact Component Rendered', [
                'config' => config('company'),
            ]);
        @endphp
    </div>
</section>
