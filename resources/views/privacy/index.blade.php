@extends('layouts.app')

@section('content')
<section class="page_banner bg_cover" style="background-image: url({{ asset('frontend/assets/images/about_bg.jpg') }})">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner_content text-center">
                    <h4 class="title">Privacy Policy</h4>
                    <p class="text-gray-200 max-w-2xl mx-auto mt-4">
                        Learn how Fuzion Mobile protects your personal information and ensures your privacy while using our website and services.
                    </p>
                    <ul class="breadcrumb justify-content-center">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a class="active" href="{{ route('privacy') }}">Privacy</a></li>
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
                <div class="terms-content">
                    <div class="terms-text">
                        <div class="card card-item">
                            <div class="card-body">
                                <h4 class="card-title fs-5">Please read our policy carefully</h4>
                                <div class="divider"><span></span></div>
                                <p>This Privacy Policy describes how Fuzion Mobile ("we," "us," or "our") collects, uses, and shares your personal information when you use our website, mobile applications, and services. We respect your privacy and are committed to protecting your personal information.</p>
                                <p>By using our services, you agree to the collection and use of your personal information as described in this Privacy Policy. Protecting our users' privacy is a top priority for us, and we take this responsibility seriously.</p>
                                <h3 class="fs-5 font-weight-semi-bold">Privacy Policy</h3>
                                <p>Updated April 22, 2025</p>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                        <div class="card card-item">
                            <div class="card-body">
                                <h4 class="card-title fs-5">1. Collection of Personal Information</h4>
                                <div class="divider"><span></span></div>
                                <p>When you use Fuzion Mobile, we may collect the following types of personal information:</p>
                                <ul class="generic-list-item generic-list-item-bullet">
                                    <li class="pb-2">
                                        <span class="text-black">User Account Information</span> - When you create an account with us, we will collect your name, email address, and password. You may also provide additional information such as your profile picture or preferences.
                                    </li>
                                    <li class="pb-2">
                                        <span class="text-black">Usage Data</span> - We collect information about how you use our website and apps, such as the products you view, pages visited, and interactions with our services. We also collect information about the device you are using, including the type of device, its operating system, and unique device identifiers.
                                    </li>
                                    <li class="pb-2">
                                        <span class="text-black">Payment Information</span> - If you purchase a product or service, we will collect your payment information, such as your credit card number, billing address, and other payment details. This information is securely transmitted to our payment processing partners and is not stored on our servers.
                                    </li>
                                </ul>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                        <div class="card card-item">
                            <div class="card-body">
                                <h4 class="card-title fs-5">2. Use of Personal Information</h4>
                                <div class="divider"><span></span></div>
                                <p>We use your personal information for the following purposes:</p>
                                <ul class="generic-list-item generic-list-item-bullet">
                                    <li class="pb-2">
                                        <span class="text-black">To Provide Our Services</span> - We use your personal information to provide you with access to our website, apps, and products, including order processing and customer support.
                                    </li>
                                    <li class="pb-2">
                                        <span class="text-black">To Improve Our Services</span> - We use your personal information to analyze how our services are being used and to identify areas where we can improve our offerings.
                                    </li>
                                    <li class="pb-2">
                                        <span class="text-black">To Communicate with You</span> - We use your personal information to send you email notifications about our services, including updates, new products, and promotional offers.
                                    </li>
                                    <li class="pb-2">
                                        <span class="text-black">To Process Payments</span> - We use your payment information to process payments for the products or services you purchase.
                                    </li>
                                    <li class="pb-2">
                                        <span class="text-black">To Comply with Legal Obligations</span> - We may use your personal information to comply with legal obligations, such as responding to court orders or law enforcement requests.
                                    </li>
                                </ul>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                        <div class="card card-item">
                            <div class="card-body">
                                <h4 class="card-title fs-5">3. Protection of Personal Information</h4>
                                <div class="divider"><span></span></div>
                                <p>We take the protection of your personal information seriously and have implemented a variety of technical and organizational measures to safeguard your data.</p>
                                <p>These measures include:</p>
                                <ul class="generic-list-item generic-list-item-bullet">
                                    <li class="pb-2">
                                        <span class="text-black">Secure Communication</span> - All communications between your device and our servers are encrypted using industry-standard SSL encryption.
                                    </li>
                                    <li class="pb-2">
                                        <span class="text-black">Access Controls</span> - We restrict access to your personal information to only those employees who need it to perform their job duties.
                                    </li>
                                    <li class="pb-2">
                                        <span class="text-black">Data Backup</span> - We regularly back up all user data to ensure that it can be restored in the event of a system failure or other data loss event.
                                    </li>
                                    <li class="pb-2">
                                        <span class="text-black">Physical Security</span> - Our servers are located in secure data centers with access controls and 24/7 monitoring.
                                    </li>
                                    <li class="pb-2">
                                        <span class="text-black">Third-Party Security</span> - We require all third-party vendors to implement appropriate security measures to protect your personal information.
                                    </li>
                                </ul>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                        <div class="card card-item">
                            <div class="card-body">
                                <h4 class="card-title fs-5">4. Sharing of Personal Information</h4>
                                <div class="divider"><span></span></div>
                                <p>We do not share your personal information with third parties, except in the following circumstances:</p>
                                <ul class="generic-list-item generic-list-item-bullet">
                                    <li class="pb-2">
                                        <span class="text-black">Service Providers</span> - We may share your personal information with third-party service providers who assist us in providing our services, such as payment processing or email delivery.
                                    </li>
                                    <li class="pb-2">
                                        <span class="text-black">Legal Obligations</span> - We may be required to disclose your personal information to comply with legal obligations, such as responding to court orders or law enforcement requests.
                                    </li>
                                    <li class="pb-2">
                                        <span class="text-black">Business Transactions</span> - In the event that our company is involved in a merger, acquisition, or sale of assets, your personal information may be transferred as part of the transaction.
                                    </li>
                                </ul>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                        <div class="card card-item">
                            <div class="card-body">
                                <h4 class="card-title fs-5">5. Cookies and Similar Technologies</h4>
                                <div class="divider"><span></span></div>
                                <p>We use cookies and other similar technologies to improve your experience on our website and apps.
                                    Cookies are small data files that are placed on your device when you visit our services.
                                    They help us remember your preferences, understand how you use our services, and personalize
                                    your experience. You can control the use of cookies through your browser settings.
                                </p>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                        <div class="card card-item">
                            <div class="card-body">
                                <h4 class="card-title fs-5">6. Updates to Privacy Policy</h4>
                                <div class="divider"><span></span></div>
                                <p>We may update this Privacy Policy from time to time to reflect
                                    changes in our services or to comply with legal requirements. We encourage
                                    you to review this policy periodically for any updates or changes.
                                    If we make any material changes to this policy, we will notify you by email or through our website.
                                </p>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                        <div class="card card-item">
                            <div class="card-body">
                                <h4 class="card-title fs-5">7. Your Rights</h4>
                                <div class="divider"><span></span></div>
                                <p class="pb-3">You have certain rights with respect to your personal information, including:</p>
                                <ul class="generic-list-item generic-list-item-bullet">
                                    <li class="pb-2">
                                        <span class="text-black">Right to Access</span> - You have the right to request access to the personal information we hold about you.
                                    </li>
                                    <li class="pb-2">
                                        <span class="text-black">Right to Correction</span> - You have the right to request that we correct any inaccuracies in your personal information.
                                    </li>
                                    <li class="pb-2">
                                        <span class="text-black">Right to Erasure</span> - You have the right to request that we delete your personal information.
                                    </li>
                                    <li class="pb-2">
                                        <span class="text-black">Right to Object</span> - You have the right to object to the processing of your personal information under certain circumstances.
                                    </li>
                                    <li class="pb-2">
                                        <span class="text-black">Right to Data Portability</span> - You have the right to receive a copy of your personal information in a structured, machine-readable format.
                                    </li>
                                </ul>
                                <p>
                                    To exercise any of these rights, please contact us at <a href="mailto:support@fuzionmobile.com" class="text-primary">support@fuzionmobile.com</a>.
                                </p>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                        <div class="card card-item">
                            <div class="card-body">
                                <h4 class="card-title fs-5">8. Children's Privacy</h4>
                                <div class="divider"><span></span></div>
                                <p>Our services are intended for users who are 18 years of age or older.
                                    We do not knowingly collect personal information from children under the age of 18.
                                    If we become aware that we have collected personal information from a child under
                                    the age of 18, we will take steps to delete the information as soon as possible.
                                </p>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                        <div class="card card-item">
                            <div class="card-body">
                                <h4 class="card-title fs-5">9. Contact Us</h4>
                                <div class="divider"><span></span></div>
                                <p>If you have any questions or concerns about our Privacy Policy,
                                    please contact us at <a href="mailto:support@fuzionmobile.com" class="text-primary">support@fuzionmobile.com</a>.
                                    We will do our best to respond to your inquiries in a timely manner.
                                </p>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                        <div class="card card-item">
                            <div class="card-body">
                                <h4 class="card-title fs-5">10. Effective Date</h4>
                                <div class="divider"><span></span></div>
                                <p>This Privacy Policy is effective as of April 22, 2025.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
