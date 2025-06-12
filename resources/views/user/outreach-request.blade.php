<x-app-layout>
    <!--==============================
Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="/assets/img/bg/breadcumb-bg.jpg" data-overlay="theme">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Medical Equipment/Outreach Request</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    <li>Requests</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
Donation Area
==============================-->
    <section class="space" id="donation-sec">
        <div class="container">
            <div class="row gy-30">
                <div class="col-xl-6">
                    <div class="donation-card style3">
                        <div class="box-thumb">
                            <img src="/assets/img/donation/donation2-1.png" alt="image">
                            <div class="donation-card-shape"
                                data-mask-src="/assets/img/donation/donation-card-shape2-1.png"></div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title">Individual Request for Mobility/Assistive Device</a></h3>
                            <p>Request for mobility/assistive device as an individual.
                            </p>
                            <div class="donation-card_progress-wrap">

                            </div>
                            <a href="{{ route('user.individual.request') }}" class="th-btn style6">Request Now <i
                                    class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="donation-card style3">
                        <div class="box-thumb">
                            <img src="/assets/img/donation/donation2-2.png" alt="image">
                            <div class="donation-card-shape"
                                data-mask-src="/assets/img/donation/donation-card-shape2-1.png"></div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title">Health or Social care Requests for Medical Equipment/Mobility/Assistive devices</a></h3>
                            <p>Request for medical equipment/mobility/assiative devices as an organisation.
                            </p>

                            <a href="{{ route('user.health.social.request') }}" class="th-btn style6 mt-5">Request Now <i
                                    class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12">
                    <div class="donation-card style3">
                        <div class="box-thumb">
                            <img src="/assets/img/donation/donation2-3.png" alt="image">
                            <div class="donation-card-shape"
                                data-mask-src="/assets/img/donation/donation-card-shape2-1.png"></div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title">Request for Health Outreach by the Community, Organization or Missionaries </a></h3>
                            <p>Request for health/social care outreaches in your community and also request for us to participate in outreaches organised by your organisation.
                            </p>
                            <a href="{{ route('user.organisation.community.request') }}" class="th-btn style6">Request Now <i
                                    class="fas fa-arrow-up-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
