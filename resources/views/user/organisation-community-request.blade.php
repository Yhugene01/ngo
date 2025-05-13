<x-app-layout>
    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="/assets/img/bg/breadcumb-bg.jpg" data-overlay="theme">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Organisation/Community/Missionary Outreach Request </h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    <li>Outreach Request</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
Team Area
==============================-->
    <section class="space">
        <div class="container">
            <div class="row gy-40 gx-80">
                <div class="col-xl-6">
                    <h2 class="title mt-n2 mb-25">Request for Outreach</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="page-img">
                                <img src="/assets/img/team/add_team_1_1.png" alt="team">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="page-img">
                                <img src="/assets/img/team/add_team_1_2.png" alt="team">
                            </div>
                        </div>
                    </div>
                    <h3 class="h5 mt-n2">Volunteer Requirements</h3>
                    <p class="mb-30">Discover the inspiring stories of individuals and communities transformed by our
                        programs. Our success stories highlight the real-life impact of your donations and the
                        resilience of those we help. These narratives showcase the power of compassion and generosity.
                    </p>
                    <div class="checklist">
                        <ul>
                            <li><i class="fas fa-check-circle"></i>Making this first true generator simply text</li>
                            <li><i class="fas fa-check-circle"></i>Many desktop publish packages nothing</li>
                            <li><i class="fas fa-check-circle"></i>If you are going to passage</li>
                            <li><i class="fas fa-check-circle"></i>It has roots in a piece</li>
                            <li><i class="fas fa-check-circle"></i>Sed ut perspiciatis unde iste natus</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="add-team-form">
                        <form action="{{ route('request.now') }}" method="POST">@csrf
                            @foreach ($errors->all() as $error)
                                <p class="text-danger">{{ $error }}</p>
                            @endforeach
                            <div class="row">
                                <div class="form-group style-border col-12">
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Your Name">
                                </div>
                                <div class="form-group style-border col-12">
                                    <input type="text" class="form-control" name="address" id="address"
                                        placeholder="Personal/organisational address">
                                </div>
                                <div class="form-group style-border col-12">
                                    <input type="text" class="form-control" name="postal_address" id="postal_address"
                                        placeholder="Postal Address">
                                </div>
                                <div class="form-group style-border col-12">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group style-border col-12">
                                    <input type="number" class="form-control" name="phone" id="phone"
                                        placeholder="Phone Number">
                                </div>
                                <div class="form-group style-border col-12">
                                    <input type="text" class="form-control" name="occupation" id="occupation"
                                        placeholder="Occupation/Position">
                                </div>
                                <div class="form-group style-border col-md-12">
                                    <select name="item" id="item" class="form-select">
                                        <option value="" disabled selected hidden>Purpose of outreach request</option>
                                        <option value="request to participate in outreach organised by your organisation">Request to participate in outreach organised by your organisation</option>
                                        <option value="request to organise an outreach">Request to organise an outreach</option>
                                    </select>
                                </div>
                                <div class="form-btn col-12 mt-4">
                                    <button type="submit" class="th-btn style3">Send Request</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
