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
        <div class="container">
            <div class="row gx-40">
                <div class="col-xxl-8 col-lg-7">
                    <div class="donation-form-v1">

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

                                <div class="form-group style-border col-md-8 col-sm-8 col-xs-12">

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
                                                                for="crutches">Crutches</label>
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
                                                <a class="dropdown-item dropdown-toggle" href="#">Transfer Equipment</a>
                                                <ul class="dropdown-menu p-2" style="width: 300px">
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="item"
                                                                type="checkbox" value="transfer-boards"
                                                                id="transfer-boards">
                                                            <label class="form-check-label"
                                                                for="transfer-boards">Transfer Boards</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="item"
                                                                type="checkbox" value="sara-steady" id="sara-steady">
                                                            <label class="form-check-label"
                                                                for="sara-steady">Sara steady</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="item"
                                                                type="checkbox" value="hoyer-lifts" id="hoyer-lifts">
                                                            <label class="form-check-label"
                                                                for="hoyer-lifts">Hoyer Lifts</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="item"
                                                                type="checkbox" value="transfer-belts" id="transfer-belts">
                                                            <label class="form-check-label"
                                                                for="transfer-belts">TransferBelts</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="item"
                                                                type="checkbox" value="gait-belts" id="gait-belts">
                                                            <label class="form-check-label"
                                                                for="gait-belts">Gait Belts</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="item"
                                                                type="checkbox" value="wheelchair-ramps" id="wheelchair-ramps">
                                                            <label class="form-check-label"
                                                                for="wheelchair-ramps">Wheelchair Ramps</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="item"
                                                                type="checkbox" value="slide-sheets" id="slide-sheets">
                                                            <label class="form-check-label"
                                                                for="slide-sheets">Slide Sheets</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="item"
                                                                type="checkbox" value="others" id="others">
                                                            <label class="form-check-label"
                                                                for="please specify">Please specify</label>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu">
                                                <a class="dropdown-item dropdown-toggle" href="#">Fall prevention equipment</a>
                                                <ul class="dropdown-menu p-2" style="width: 300px">
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="item"
                                                                type="checkbox" value="crash-mats"
                                                                id="crash-mats">
                                                            <label class="form-check-label"
                                                                for="crash-mats">Crash mats</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="item"
                                                                type="checkbox" value="bed" id="bed">
                                                            <label class="form-check-label"
                                                                for="bed">Bed</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="item"
                                                                type="checkbox" value="chair-and-floor-mat-sensors" id="chair-and-floor-mat-sensors">
                                                            <label class="form-check-label"
                                                                for="chair-and-floor-mat-sensors">Chair and floor mat sensors </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="item"
                                                                type="checkbox" value="others" id="others">
                                                            <label class="form-check-label"
                                                                for="please specify">Please specify</label>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu">
                                                <a class="dropdown-item dropdown-toggle" href="#">Medical supplies and PPE</a>
                                                <ul class="dropdown-menu p-2" style="width: 300px">
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="item"
                                                                type="checkbox" value="catheter"
                                                                id="catheter">
                                                            <label class="form-check-label"
                                                                for="catheter">Catheter</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="item"
                                                                type="checkbox" value="wound-care-supplies" id="wound-care-supplies">
                                                            <label class="form-check-label"
                                                                for="wound-care-supplies">Wound care supplies</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="item"
                                                                type="checkbox" value="diapers" id="diapers">
                                                            <label class="form-check-label"
                                                                for="diapers">Diapers</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="item"
                                                                type="checkbox" value="gloves" id="gloves">
                                                            <label class="form-check-label"
                                                                for="gloves">Gloves</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="item"
                                                                type="checkbox" value="face masks" id="face masks">
                                                            <label class="form-check-label"
                                                                for="face-masks">Face masks</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="item"
                                                                type="checkbox" value="others" id="hoyer-lifts">
                                                            <label class="form-check-label"
                                                                for="hoyer-lifts">Please specify</label>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu">
                                                <a class="dropdown-item dropdown-toggle" href="#">Hospital furniture</a>
                                                <ul class="dropdown-menu p-2" style="width: 300px">
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="item"
                                                                type="checkbox" value="hospital beds and mattresses"
                                                                id="item">
                                                            <label class="form-check-label"
                                                                for="item">Hospital beds and mattresses</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="item"
                                                                type="checkbox" value="overbed-tables" id="overbed-tables">
                                                            <label class="form-check-label"
                                                                for="overbed-tables">Overbed tables</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" name="item"
                                                                type="checkbox" value="others" id="hoyer-lifts">
                                                            <label class="form-check-label"
                                                                for="hoyer-lifts">Please specify</label>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu">
                                                <a class="dropdown-item dropdown-toggle" href="#">Other categories not listed.
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




                                </div>

                                <div class="form-btn col-12 mt-4 mb-6">
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
                                            support for every
                                            homeless poor children</a></h4>
                                    <p class="box-text">Join our community of dedicated supporters by
                                        becoming a member.</p>
                                </div>
                                <div class="donation-progress-wrap">
                                    <div class="media-left">
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 85%;">
                                                <div class="progress-value">85%</div>
                                            </div>
                                        </div>
                                        <div class="donation-progress-content">
                                            <span class="donation-card_raise text-title">Raised<span
                                                    class="ms-1 me-1">-</span>5M</span>
                                            <span class="donation-card_goal text-theme">Goal<span
                                                    class="ms-1 me-1">-</span>$10M</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget  " data-bg-src="/assets/img/bg/gray-bg2.png" data-overlay="gray"
                            data-opacity="5">
                            <div class="author-widget-wrap">
                                <div class="author-tag">Organizer:</div>
                                <div class="avater">
                                    <img src="/assets/img/blog/blog-author.jpg" alt="avater">
                                </div>
                                <div class="author-info">
                                    <h4 class="name"><a class="text-inherit" href="blog.html">Emanuel Marko</a>
                                    </h4>
                                    <span class="meta">
                                        <a href="blog.html"><i class="fas fa-tags"></i>Education</a>
                                    </span>
                                    <span class="meta">
                                        <a href="blog.html"><i class="fas fa-map-marker-alt"></i>New Jersey, USA</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
