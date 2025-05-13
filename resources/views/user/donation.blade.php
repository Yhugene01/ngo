<x-app-layout>
    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="/assets/img/bg/breadcumb-bg.jpg" data-overlay="theme">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Donations</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    <li>Donations</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
Donation Area
==============================-->
    <section class="space" id="donation-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title-area text-center">
                        <span class="sub-title before-none after-none"><i class="far fa-heart text-theme"></i> Lets
                            Start Donating</span>
                        <h2 class="sec-title">See Your Impact: Transparent
                            Donation Causes</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-30">
                <div class="col-xl-6">
                    <div class="donation-card style3">
                        <div class="box-thumb">
                            <img src="/assets/img/donation/donation2-1.png" alt="image">
                            <div class="donation-card-tag">85%</div>
                            <div class="donation-card-shape"
                                data-mask-src="/assets/img/donation/donation-card-shape2-1.png"></div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="blog-details.html">Medical equipment and mobility/assistive
                                    devices</a></h3>
                            <p>Join our community of dedicated supporter by becoming member. Enjoy exclusive benefit.
                            </p>
                            <div class="donation-card_progress-wrap">

                            </div>
                            <a href="{{ route('user.medical.equipment') }}" class="th-btn style6">Donate Now <i
                                    class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="donation-card style3">
                        <div class="box-thumb">
                            <img src="/assets/img/donation/donation2-2.png" alt="image">
                            <div class="donation-card-tag bg-theme2">85%</div>
                            <div class="donation-card-shape"
                                data-mask-src="/assets/img/donation/donation-card-shape2-1.png"></div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="blog-details.html">Financial Giving</a></h3>
                            <p>Join our community of dedicated supporter by becoming member. Enjoy exclusive benefit.
                            </p>

                            <a href="{{ route('user.financial.giving') }}" class="th-btn style6 mt-5">Donate Now <i
                                    class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12">
                    <div class="donation-card style3">
                        <div class="box-thumb">
                            <img src="/assets/img/donation/donation2-3.png" alt="image">
                            <div class="donation-card-tag">85%</div>
                            <div class="donation-card-shape"
                                data-mask-src="/assets/img/donation/donation-card-shape2-1.png"></div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="blog-details.html">Volunteer Opportunities</a></h3>
                            <p>Join our community of dedicated supporter by becoming member. Enjoy exclusive benefit.
                            </p>
                            <a href="{{ route('user.volunteer') }}" class="th-btn style6">Volunteer now<i
                                    class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
</x-app-layout>
