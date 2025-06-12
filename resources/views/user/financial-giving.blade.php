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
    <section class="donation-details">
        <div class="container">
            <div class="row gx-40 d-flex justify-content-center align-items-center vh-100">
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
                                        placeholder="Pay into this account">
                                </div>
                                <div class="form-group style-border col-md-6">
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="2180234567 GTB">
                                </div>
                                <div class="form-btn col-12">
                                    <button class="th-btn"><i class="fas fa-heart me-2"></i> Donate Now</button>
                                </div>

                            </div>
                        </form>

                        <p class="form-messages mb-0 mt-3"></p>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
