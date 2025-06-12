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

                        <h5 class="title">Medical equipment and mobility/assistive device</h5>


                        <form action="{{ route('donate.now') }}" method="POST">@csrf
                            <h5 class="title mt-5">Info</h5>
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
                                        placeholder="Item you want to donate">
                                </div>

                                {{-- <div class="form-group style-border col-md-8 col-sm-8 col-xs-12">

                                    <div class="dropdown dropend">
                                        <div class="btn btn-success style-border dropdown-toggle " type="button"
                                            data-bs-toggle="dropdown">
                                            Select Mobility/Assistive Device
                                        </div>

                                        <ul class="dropdown-menu p-5" style="width: 300px;">
                                            <li class="dropdown-submenu ">
                                                <a class="dropdown-item dropdown dropend" href="#">Mobility
                                                    aids</a>
                                                <ul class="dropdown-menu p-2" style="width: 300px">
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="item"
                                                                type="checkbox" value="wheelchair" id="wheelchair">
                                                            <label class="form-check-label"
                                                                for="wheelchair">Wheelchair</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="item"
                                                                type="checkbox" value="crutches" id="crutches">
                                                            <label class="form-check-label"
                                                                for="mobilityaid_crutches">Crutches</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="item"
                                                                type="checkbox" value="sticks" id="sticks">
                                                            <label class="form-check-label"
                                                                for="sticks">Sticks</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="item"
                                                                type="checkbox" value="4-wheel walker"
                                                                id="4-wheel walker">
                                                            <label class="form-check-label" for="4-wheel walker">4
                                                                Wheel Walker</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="item"
                                                                type="checkbox" value="4-wheel walker"
                                                                id="4-wheel walker">
                                                            <label class="form-check-label"
                                                                for="please specify">Please Specify</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu">
                                                <a class="dropdown-item dropdown-toggle" href="#">Assistive
                                                    device</a>
                                                <ul class="dropdown-menu p-2" style="width: 300px">
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="item"
                                                                type="checkbox" value="bath-and-shower-chairs"
                                                                id="bath-and-shower-chairs">
                                                            <label class="form-check-label"
                                                                for="bath-and-shower-chairs">Bath and Shower
                                                                chairs</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="item"
                                                                type="checkbox" value="raised-toilet-seats"
                                                                id="raised-toilet-seats">
                                                            <label class="form-check-label"
                                                                for="raised-toilet-seats">Raised toilet seats
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="item"
                                                                type="checkbox" value="commode-chairs"
                                                                id="commode-chairs">
                                                            <label class="form-check-label"
                                                                for="commode-chairs">Commode Chairs</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="item"
                                                                type="checkbox" value="bed-rails" id="bed-rails">
                                                            <label class="form-check-label" for="bed-rails">Bed
                                                                rails</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu">
                                                <a class="dropdown-item dropdown-toggle" href="#">Diagnostic
                                                    & Monitor Equipment</a>
                                                <ul class="dropdown-menu p-2" style="width: 300px">
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="item"
                                                                type="checkbox" value="blood-pressure-monitors"
                                                                id="blood-pressure-monitors">
                                                            <label class="form-check-label"
                                                                for="blood-pressure-monitor">Blood Pressure
                                                                Monitor</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="item"
                                                                type="checkbox" value="glucometer" id="glucometer">
                                                            <label class="form-check-label"
                                                                for="glucometer">Glucometer</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="item"
                                                                type="checkbox" value="others" id="others">
                                                            <label class="form-check-label"
                                                                for="others">Others</label>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu">
                                                <a class="dropdown-item dropdown-toggle" href="#">Others
                                                    please specify</a>
                                                <ul class="dropdown-menu p-2" style="width: 500px">
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="item"
                                                                type="checkbox" value="other-categories"
                                                                id="other-categories">
                                                            <label class="form-check-label"
                                                                for="other-categories">Other categories(please
                                                                specify)</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>




                                </div> --}}

                                <div class="form-btn col-12 mt-4">
                                    <button type="submit" class="th-btn"><i class="fas fa-heart me-2"></i>
                                        Donate Now</button>
                                </div>


                            </div>
                        </form>


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
                                            support by donating medical equipment.</a></h4>
                                </div>

                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
