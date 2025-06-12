<x-app-layout>
    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="/assets/img/bg/breadcumb-bg.jpg" data-overlay="theme">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Request Now</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    <li>Requests</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
Blog Area
==============================-->
    <section class="donation-details space-top space-extra2-bottom">
        <div class="container ">
            <div class="row gx-40 d-flex justify-content-center align-items-center vh-100">
                <div class="col-xxl-8 col-lg-7">
                    <div class="donation-form-v1 ">

                        <h5 class="title mb-4" >Request for Mobility/Assistive device</h5>

                        <form action="{{ route('request.now') }}" method="POST">@csrf
                            @foreach ($errors->all() as $error)
                                <p class="text-danger">{{ $error }}</p>
                            @endforeach
                            <div class="row">
                                <div class="form-group style-border col-md-6">
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Individual/Organisation name">
                                </div>
                                <div class="form-group style-border col-md-6">
                                    <input type="text" class="form-control" name="address" id="address"
                                        placeholder="Personal/Organizational address">
                                </div>
                                <div class="form-group style-border col-md-12">
                                    <input type="text" class="form-control" name="postal_address" id="postal_address"
                                        placeholder="Postal Address">
                                </div>
                                <div class="form-group style-border col-md-12">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Email Address">
                                </div>

                                <div class="form-group style-border col-md-12">
                                    <input type="number" class="form-control" name="phone" id="phone"
                                        placeholder="Phone" required minlength="11">
                                </div>

                                <div class="form-group style-border col-md-12">
                                    <input type="text" class="form-control" name="occupation" id="occupation"
                                        placeholder="Position/Occupation">
                                </div>

                                 <div class="form-group style-border col-md-12">
                                    <input type="text" class="form-control" name="item" id="item"
                                        placeholder="Item you want to request for">
                                </div>

                                <div class="form-btn col-12 mt-4">
                                    <button type="submit" class="th-btn"><i class="fas fa-heart me-2"></i>
                                        Send Request</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
