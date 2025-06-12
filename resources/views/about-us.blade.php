<x-app-layout>
    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="/assets/img/bg/breadcumb-bg.jpg" data-overlay="theme">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">About Us</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
Feature Area
==============================-->


    <div class="overflow-hidden space" id="about-sec">
        <div class="shape-mockup about-bg-shape1-1 jump-reverse" data-top="10%" data-right="5%">
            <img src="/assets/img/shape/heart-shape1.png" alt="shape">
        </div>
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-xl-7">
                    <div class="img-box1">
                        <div class="img1" data-mask-src="/assets/img/normal/about_1_1-mask.png">
                            <img src="/assets/img/normal/about_1_1.png" alt="About">
                        </div>
                        <div class="about-shape1-1 jump">
                            <img src="/assets/img/shape/about_shape1_1.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="about-wrap1">
                        <div class="title-area mb-30">
                            <span class="sub-title before-none">Who we are</span>
                            <h2 class="sec-title">About us: Donate4Health</h2>
                            <p class="">Donate4Health Initiative is a non-governmental organization committed to
                                providing medical equipment and mobility/assistive devices for underprivileged
                                individuals and health or social care facilities, particularly in disadvantaged and
                                geographically underserved areas of Nigeria. We promote sustainability by repurposing
                                donated medical equipment and mobility/assistive devices from individuals and
                                organisations locally and internationally. Additionally, we utilise monetary
                                contributions from philanthropists and local or international organisations to purchase
                                medical equipment and mobility/assistive devices, as well as to organise outreaches,
                                manage logistics, and support other activities related to the Donate4Health Initiative.
                            </p>
                        </div>
                        <div class="title-area mb-30">
                            <span class="sub-title before-none"> Our Vision</span>
                            <p>To build a community where everyone has access to essential medical equipment and
                                mobility/assistive devices.</p>
                        </div>
                        <div class="title-area mb-30">
                            <span class="sub-title before-none">Our Mission</span>
                            <p>Identifies, solicits, gathers, organises and distributes medical equipment and
                                mobility/assistive devices to disadvantaged individuals and health and social care
                                facilities across Nigeria</p>
                        </div>
                        <div class="title-area mb-30">
                            <span class="sub-title before-none">Our Location</span>
                            <p></p>
                        </div>

                        <div class="checklist style2 list-two-column">
                            <ul>
                                <li>Charity For Foods</li>
                                <li data-theme-color="var(--theme-color2)">Charity For Water</li>
                                <li data-theme-color="#FF5528">Charity For Education</li>
                                <li data-theme-color="#122F2A">Charity For Medical</li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div><!--==============================
Team Area
==============================-->
    <section class="space" id="team-sec" data-bg-src="/assets/img/bg/gray-bg2.png">
        <div class="shape-mockup team-bg-shape3-1 d-xxl-block d-none" data-top="0%" data-left="0%" data-bottom="0"><img
                src="/assets/img/shape/team_bg_shape3_1.png" alt="img"></div>
        <div class="shape-mockup team-bg-shape3-2 d-xxl-block d-none" data-top="0%" data-right="0%" data-bottom="0">
            <img src="/assets/img/shape/team_bg_shape3_2.png" alt="img"></div>
        <div class="shape-mockup team-bg-shape3-3 spin d-xxl-block d-none" data-top="15%" data-left="20%">
            <div class="color-masking2">
                <div class="masking-src" data-mask-src="/assets/img/shape/team_bg_shape3_3.png"></div>
                <img src="/assets/img/shape/team_bg_shape3_3.png" alt="img">
            </div>
        </div>
        <div class="shape-mockup team-bg-shape3-4 jump d-xxl-block d-none" data-top="18%" data-right="10%">
            <img src="/assets/img/shape/team_bg_shape3_4.png" alt="img">
        </div>
        <div class="shape-mockup team-bg-shape3-5 spin d-xxl-block d-none" data-bottom="18%" data-left="10%">
            <img src="/assets/img/shape/team_bg_shape3_5.png" alt="img">
        </div>
        <div class="shape-mockup team-bg-shape3-6 spin d-xxl-block d-none" data-bottom="10%" data-right="10%">
            <div class="color-masking">
                <div class="masking-src" data-mask-src="/assets/img/shape/team_bg_shape3_6.png"></div>
                <img src="/assets/img/shape/team_bg_shape3_6.png" alt="img">
            </div>
        </div>
        {{-- <div class="container">
        <div class="title-area text-center">
            <span class="sub-title after-none before-none"><i class="far fa-heart text-theme"></i> Our Volunteer</span>
            <h2 class="sec-title">Meet The Optimistic Volunteer</h2>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="teamSlider3" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">
                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card3">
                            <div class="team-img">
                                <img src="/assets/img/team/team_3_1.png" alt="Team">
                            </div>
                            <div class="team-card-content">
                                <h3 class="box-title"><a href="team-details.html">Michel Connor</a></h3>
                                <span class="team-desig">Volunteer</span>
                                <div class="th-social style2">
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                    <a target="_blank" href="https://behance.com/"><i class="fab fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card3">
                            <div class="team-img">
                                <img src="/assets/img/team/team_3_2.png" alt="Team">
                            </div>
                            <div class="team-card-content">
                                <h3 class="box-title"><a href="team-details.html">Jessica Lauren</a></h3>
                                <span class="team-desig">Volunteer</span>
                                <div class="th-social style2">
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                    <a target="_blank" href="https://behance.com/"><i class="fab fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card3">
                            <div class="team-img">
                                <img src="/assets/img/team/team_3_3.png" alt="Team">
                            </div>
                            <div class="team-card-content">
                                <h3 class="box-title"><a href="team-details.html">Daniel Thomas</a></h3>
                                <span class="team-desig">Volunteer</span>
                                <div class="th-social style2">
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                    <a target="_blank" href="https://behance.com/"><i class="fab fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card3">
                            <div class="team-img">
                                <img src="/assets/img/team/team_3_4.png" alt="Team">
                            </div>
                            <div class="team-card-content">
                                <h3 class="box-title"><a href="team-details.html">Michel Vetory</a></h3>
                                <span class="team-desig">Volunteer</span>
                                <div class="th-social style2">
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                    <a target="_blank" href="https://behance.com/"><i class="fab fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card3">
                            <div class="team-img">
                                <img src="/assets/img/team/team_3_5.png" alt="Team">
                            </div>
                            <div class="team-card-content">
                                <h3 class="box-title"><a href="team-details.html">Emma Mary</a></h3>
                                <span class="team-desig">Volunteer</span>
                                <div class="th-social style2">
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                    <a target="_blank" href="https://behance.com/"><i class="fab fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card3">
                            <div class="team-img">
                                <img src="/assets/img/team/team_3_6.png" alt="Team">
                            </div>
                            <div class="team-card-content">
                                <h3 class="box-title"><a href="team-details.html">Alexander Joseph</a></h3>
                                <span class="team-desig">Volunteer</span>
                                <div class="th-social style2">
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                    <a target="_blank" href="https://behance.com/"><i class="fab fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card3">
                            <div class="team-img">
                                <img src="/assets/img/team/team_3_7.png" alt="Team">
                            </div>
                            <div class="team-card-content">
                                <h3 class="box-title"><a href="team-details.html">Olivia Patricia</a></h3>
                                <span class="team-desig">Volunteer</span>
                                <div class="th-social style2">
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                    <a target="_blank" href="https://behance.com/"><i class="fab fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card3">
                            <div class="team-img">
                                <img src="/assets/img/team/team_3_8.png" alt="Team">
                            </div>
                            <div class="team-card-content">
                                <h3 class="box-title"><a href="team-details.html">Ethan David</a></h3>
                                <span class="team-desig">Volunteer</span>
                                <div class="th-social style2">
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                    <a target="_blank" href="https://behance.com/"><i class="fab fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> --}}
    </section>

    <!--==============================
Counter Area
==============================-->


    <section class="space-top">
        <div class="shape-mockup process-shape1-1 jump-reverse d-xxl-block d-none" data-top="20%" data-left="0"><img
                src="/assets/img/shape/hand-bg-shape2-1.png" alt="img"></div>
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title after-none before-none">Work Process</span>
                <h2 class="sec-title">Our Donating Work Process</h2>
            </div>
            <div class="row gy-40 justify-content-center">
                <div class="col-lg-4 col-md-6 process-card-wrap">
                    <div class="process-card">
                        <div class="process-card-thumb-wrap">
                            <div class="process-card-thumb" data-mask-src="/assets/img/process/process-card-shape.png">
                                <img src="/assets/img/process/process-card-1-1.png" alt="img">
                            </div>
                            <div class="process-card-icon">
                                <img src="/assets/img/icon/process-icon1-1.svg" alt="img">
                            </div>
                            <div class="process-card-shape">
                                <img src="/assets/img/process/process-card-shape2.png" alt="img">
                            </div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title">Awareness & Engagement</h3>
                            <p class="box-text">To inform and engage potential donors and supporters about the
                                charity’s mission and the cause it supports. Utilize various channels such as social
                                media.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 process-card-wrap">
                    <div class="process-card">
                        <div class="process-card-thumb-wrap">
                            <div class="process-card-thumb"
                                data-mask-src="/assets/img/process/process-card-shape.png">
                                <img src="/assets/img/process/process-card-1-1.png" alt="img">
                            </div>
                            <div class="process-card-icon">
                                <img src="/assets/img/icon/process-icon1-2.svg" alt="img">
                            </div>
                            <div class="process-card-shape">
                                <img src="/assets/img/process/process-card-shape2.png" alt="img">
                            </div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title">Donation Collection</h3>
                            <p class="box-text">Set up a secure and user-friendly online donation platform that accepts
                                multiple payment methods and allows for both one-time and recurring donations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 process-card-wrap">
                    <div class="process-card">
                        <div class="process-card-thumb-wrap">
                            <div class="process-card-thumb"
                                data-mask-src="/assets/img/process/process-card-shape.png">
                                <img src="/assets/img/process/process-card-1-1.png" alt="img">
                            </div>
                            <div class="process-card-icon">
                                <img src="/assets/img/icon/process-icon1-3.svg" alt="img">
                            </div>
                            <div class="process-card-shape">
                                <img src="/assets/img/process/process-card-shape2.png" alt="img">
                            </div>
                        </div>
                        <div class="box-content">
                            <h3 class="box-title">Impact and Accountability</h3>
                            <p class="box-text">Allocate funds to specific projects and initiatives that align with the
                                charity’s mission, ensuring that resources are used efficiently and effectively.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
Testimonial Area
==============================-->
    <section class="testi-area-1 space" id="testi-sec">
        <div class="shape-mockup testi-bg-shape1-1 jump-reverse d-xl-block d-none" data-top="5%" data-right="0">
            <img src="/assets/img/shape/footer-bg-shape3.png" alt="img">
        </div>
        <div class="shape-mockup testi-bg-shape1-2" data-top="28%" data-left="5%">
            <img src="/assets/img/shape/testimonial_shape1_1.png" alt="img">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="title-area text-center">
                        <span class="sub-title">Testimonials</span>
                        <h2 class="sec-title">What People Say About
                            Our Charity</h2>
                    </div>
                </div>
            </div>
            <div class="row gx-0 justify-content-end">
                <div class="col-lg-5">
                    <div class="swiper th-slider testi-thumb-slider1"
                        data-slider-options='{"effect":"fade","loop":false}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testi-box-img">
                                    <img class="testi-img" src="/assets/img/testimonial/testi_1_1.png"
                                        alt="img">
                                    <div class="testi-card_review">
                                        <i class="fas fa-star"></i>
                                        5.0
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-box-img">
                                    <img class="testi-img" src="/assets/img/testimonial/testi_1_2.png"
                                        alt="img">
                                    <div class="testi-card_review">
                                        <i class="fas fa-star"></i>
                                        5.0
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-box-img">
                                    <img class="testi-img" src="/assets/img/testimonial/testi_1_1.png"
                                        alt="img">
                                    <div class="testi-card_review">
                                        <i class="fas fa-star"></i>
                                        5.0
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-box-img">
                                    <img class="testi-img" src="/assets/img/testimonial/testi_1_2.png"
                                        alt="img">
                                    <div class="testi-card_review">
                                        <i class="fas fa-star"></i>
                                        5.0
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="testi-slider1">
                        <div class="swiper th-slider testimonial-slider1" id="testiSlide1"
                            data-slider-options='{"loop":false,"paginationType":"progressbar","effect":"fade", "autoHeight": "true", "thumbs":{"swiper":".testi-thumb-slider1"}}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testi-card">
                                        <p class="box-text">“Stay informed about our upcoming events and campaigns.
                                            Whether it's a fundraising gala, a charity run, or a community outreach
                                            program, there are plenty of ways to get involved and support our cause.
                                            Check our event calendar for details. We prioritize your security. Our
                                            donation process uses the latest encryption technology to protect your
                                            personal and financial information. Donate with confidence knowing”</p>
                                        <h3 class="box-title">Alex Furnandes</h3>
                                        <p class="box-desig">CEO, Founder</p>
                                        <div class="quote-icon" data-mask-src="/assets/img/icon/quote2.svg"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-card">
                                        <p class="box-text">“Our donation process uses the latest encryption technology
                                            to protect your personal and financial information. Donate with confidence
                                            knowing Stay informed about our upcoming events and campaigns. Whether it's
                                            a fundraising gala, a charity run, or a community outreach program, there
                                            are plenty of ways to get involved and support our cause. Check our event
                                            calendar for details. We prioritize your security.”</p>
                                        <h3 class="box-title">Mustafa Kamal</h3>
                                        <p class="box-desig">CEO, Founder</p>
                                        <div class="quote-icon" data-mask-src="/assets/img/icon/quote2.svg"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-card">
                                        <p class="box-text">“Stay informed about our upcoming events and campaigns.
                                            Whether it's a fundraising gala, a charity run, or a community outreach
                                            program, there are plenty of ways to get involved and support our cause.
                                            Check our event calendar for details. We prioritize your security. Our
                                            donation process uses the latest encryption technology to protect your
                                            personal and financial information. Donate with confidence knowing”</p>
                                        <h3 class="box-title">Alex Furnandes</h3>
                                        <p class="box-desig">CEO, Founder</p>
                                        <div class="quote-icon" data-mask-src="/assets/img/icon/quote2.svg"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-card">
                                        <p class="box-text">“Our donation process uses the latest encryption technology
                                            to protect your personal and financial information. Donate with confidence
                                            knowing Stay informed about our upcoming events and campaigns. Whether it's
                                            a fundraising gala, a charity run, or a community outreach program, there
                                            are plenty of ways to get involved and support our cause. Check our event
                                            calendar for details. We prioritize your security.”</p>
                                        <h3 class="box-title">Mustafa Kamal</h3>
                                        <p class="box-desig">CEO, Founder</p>
                                        <div class="quote-icon" data-mask-src="/assets/img/icon/quote2.svg"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-pagination"></div>
                            <div class="slider-pagination2"></div>
                        </div>
                        <div class="icon-box">
                            <button data-slider-prev="#testiSlide1"
                                class="slider-arrow default style-border slider-prev"><i
                                    class="far fa-arrow-left"></i></button>
                            <button data-slider-next="#testiSlide1"
                                class="slider-arrow default style-border slider-next"><i
                                    class="far fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
