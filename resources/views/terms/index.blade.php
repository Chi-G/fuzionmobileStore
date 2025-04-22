@extends('layouts.app')

@section('content')
<section class="page_banner bg_cover" style="background-image: url({{ asset('frontend/assets/images/about_bg.jpg') }})">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner_content text-center">
                    <h2 class="title">Terms and Conditions</h2>
                    <p class="text-gray-200 max-w-2xl mx-auto mt-4">
                        Review the terms governing your use of Fuzion Mobile’s products, services, and website, ensuring a clear understanding of our policies.
                    </p>
                    <ul class="breadcrumb justify-content-center">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a class="active" href="{{ route('terms') }}">Terms</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="courses_area pt-80 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-item">
                    <div class="card-body">
                        <h4 class="card-title fs-5">1. Acceptance of Terms</h4>
                        <div class="divider"><span></span></div>
                        <p>
                            <span class="fs-16 font-weight-semi-bold text-black">1.1</span> By accessing or using the Fuzion Mobile website, mobile applications, or services
                            (collectively referred to as "Fuzion Mobile"), you agree to comply with and be bound
                            by these Terms and Conditions. If you do not agree with any part of these terms,
                            you may not use Fuzion Mobile.
                        </p>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                <div class="card card-item">
                    <div class="card-body">
                        <h4 class="card-title fs-5">2. User Eligibility</h4>
                        <div class="divider"><span></span></div>
                        <p>
                            <span class="fs-16 font-weight-semi-bold text-black">2.1</span> Users must be at least 18 years old or have the consent of a legal guardian to use Fuzion Mobile.
                            Users are responsible for providing accurate, current, and complete information during the
                            registration or purchase process.
                        </p>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                <div class="card card-item">
                    <div class="card-body">
                        <h4 class="card-title fs-5">3. Product and Service Access</h4>
                        <div class="divider"><span></span></div>
                        <p>
                            <span class="fs-16 font-weight-semi-bold text-black">3.1</span> Products and services on Fuzion Mobile, including smartphones, VR technology, SD cards, and software,
                            are available for purchase or subscription. Users may not share, reproduce, distribute, or publicly display
                            product content or software without explicit permission from Fuzion Mobile.
                        </p>
                        <p>
                            <span class="fs-16 font-weight-semi-bold text-black">3.2</span> Fuzion Mobile reserves the right to modify, discontinue, or remove products or services,
                            and may provide refunds or credits at its discretion.
                        </p>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                <div class="card card-item">
                    <div class="card-body">
                        <h4 class="card-title fs-5">4. Intellectual Property</h4>
                        <div class="divider"><span></span></div>
                        <p>
                            <span class="fs-16 font-weight-semi-bold text-black">4.1</span> All content on Fuzion Mobile, including product designs, logos, trademarks, and website content,
                            is the property of Fuzion Mobile or its licensors. Users may not use, reproduce, or distribute
                            any content from Fuzion Mobile without explicit permission.
                        </p>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                <div class="card card-item">
                    <div class="card-body">
                        <h4 class="card-title fs-5">5. Refund Policy</h4>
                        <div class="divider"><span></span></div>
                        <p>
                            <span class="fs-16 font-weight-semi-bold text-black">5.1</span> Refund policies for products and services are outlined on the Fuzion Mobile website and may vary based on
                            the type of purchase. Users are responsible for reviewing and understanding the refund
                            policies before making a purchase.
                        </p>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                <div class="card card-item">
                    <div class="card-body">
                        <h4 class="card-title fs-5">6. Privacy</h4>
                        <div class="divider"><span></span></div>
                        <p>
                            <span class="fs-16 font-weight-semi-bold text-black">6.1</span> Fuzion Mobile collects, stores, and processes user data in accordance with its Privacy Policy.
                            By using Fuzion Mobile, users consent to the collection, storage, and processing of their information.
                        </p>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                <div class="card card-item">
                    <div class="card-body">
                        <h4 class="card-title fs-5">7. Termination</h4>
                        <div class="divider"><span></span></div>
                        <p>
                            <span class="fs-16 font-weight-semi-bold text-black">7.1</span> Fuzion Mobile reserves the right to terminate or suspend user accounts without notice for
                            violations of these Terms and Conditions or for any other reason.
                        </p>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                <div class="card card-item">
                    <div class="card-body">
                        <h4 class="card-title fs-5">8. Modification of Terms</h4>
                        <div class="divider"><span></span></div>
                        <p>
                            <span class="fs-16 font-weight-semi-bold text-black">8.1</span> Fuzion Mobile may modify these Terms and Conditions at any time. Users will be notified of
                            changes, and continued use of Fuzion Mobile after modifications constitutes acceptance of the updated terms.
                        </p>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                <div class="card card-item">
                    <div class="card-body">
                        <h4 class="card-title fs-5">9. Governing Law</h4>
                        <div class="divider"><span></span></div>
                        <p>
                            <span class="fs-16 font-weight-semi-bold text-black">9.1</span> These Terms and Conditions are governed by the laws of the United States.
                            Any disputes arising out of or related to these terms will be resolved exclusively in the courts of
                            the United States.
                        </p>
                        <p>
                            <span class="fs-16 font-weight-semi-bold text-black">9.2</span> Users agree that Fuzion Mobile may seek injunctive or other equitable relief to protect its
                            rights under these terms.
                        </p>
                    </div><!-- end card-body -->
                </div><!-- end card -->
                <div class="card card-item">
                    <div class="card-body">
                        <h4 class="card-title fs-5">10. Miscellaneous</h4>
                        <div class="divider"><span></span></div>
                        <p>
                            <span class="fs-16 font-weight-semi-bold text-black">10.1</span> These Terms and Conditions constitute the entire agreement between the
                            user and Fuzion Mobile and supersede any prior agreements.
                        </p>
                        <p>
                            <span class="fs-16 font-weight-semi-bold text-black">10.2</span> If any provision of these terms is found to be invalid, the remaining
                            provisions will continue to be valid and enforceable.
                        </p>
                        <p>By using Fuzion Mobile, you acknowledge that you have read, understood, and agree to these Terms
                            and Conditions.</p>
                        <p>For questions, contact us at <a href="mailto:support@fuzionmobile.com" class="text-blue-500 hover:underline">support@fuzionmobile.com</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
