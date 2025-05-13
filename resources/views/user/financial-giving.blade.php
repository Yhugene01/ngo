
<x-app-layout>
    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="/assets/img/bg/breadcumb-bg.jpg" data-overlay="theme">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Donate Now</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    <li>Donation</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
Blog Area
==============================-->
    <section class="donation-details space-top space-extra2-bottom">
        <div class="container">
            <div class="row gx-40">
                <div class="col-xxl-8 col-lg-7">
                    <div class="donation-form-v1">

                        <h5 class="title">Financial Giving</h5>
                        <form action="{{ route('donate.now') }}" method="POST">@csrf
                            @foreach ($errors->all() as $error)
                                <p class="text-danger">{{ $error }}</p>
                            @endforeach
                            <div class="row">
                                <div class="form-group style-border col-md-6">
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Account Number">
                                </div>
                                <div class="form-btn col-12">
                                    <button class="th-btn"><i class="fas fa-heart me-2"></i> Donate Now</button>
                                </div>

                            </div>
                        </form>

                        <p class="form-messages mb-0 mt-3"></p>

                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area donation-sidebar">
                        <div class="widget  ">
                            <div class="widget-donation-card">
                                <div class="box-content">
                                    <div class="box-thumb">
                                        <a href="blog-details.html"><img
                                                src="/assets/img/widget/widget-donation_card1_1.jpg"
                                                alt="Blog Image"></a>
                                    </div>
                                    <h4 class="box-title"><a class="text-inherit" href="blog-details.html">Give
                                            health
                                            support for every
                                            homeless poor children</a></h4>
                                    <p class="box-text">Join our community of dedicated supporters by
                                        becoming a member.</p>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
