<x-app-layout>
    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="/assets/img/bg/breadcumb-bg.jpg" data-overlay="theme">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Become A Volunteer</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    <li>Become A Volunteer</li>
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
                    <h2 class="title mt-n2 mb-25">Let’s join our community
                        to become a volunteer</h2>
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
                    <h3 class="h5 mt-n2">Make a Difference: Volunteer Today!</h3>
                    <p class="mb-30">Join our team of passionate volunteers and help create positive change in your community. Whether it’s a few hours a week or just one event, your time can make a real impact. Learn new skills, meet great people, and give back in a meaningful way. Sign up now and be the change!
                    </p>
                </div>
                <div class="col-xl-6">
                    <div class="add-team-form">
                        <form action="{{ route('volunteer.opportunities') }}" method="POST">@csrf
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
                                    <select name="subject" id="subject" class="form-select">
                                        <option value="" disabled selected hidden>Purpose of volunteer</option>
                                        <option value="Participate in outreaches">Participate in outreaches</option>
                                        <option value="Fund raising activities">Fund Raising Activities</option>
                                        <option value="Social media manager/content creator">Social Meddia
                                            Manager/Content Creation</option>
                                        <option value="Other">Others(Please specify)</option>
                                    </select>
                                </div>
                                {{-- <div class="form-group style-border col-12">
                                    <textarea name="message" id="message" cols="30" rows="3" class="form-control"
                                        placeholder="Type Your Message"></textarea>
                                </div> --}}
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
