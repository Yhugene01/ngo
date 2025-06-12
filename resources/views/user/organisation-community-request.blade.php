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
        <div class="container space-extra2-bottom">
            <div class="row gy-40 gx-80 d-flex justify-content-center align-items-center vh-100">
                <div class="col-xl-6">
                    <div class="add-team-form">
                         <h2 class="title mt-n2 mb-25"> Outreach Request</h2>
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
