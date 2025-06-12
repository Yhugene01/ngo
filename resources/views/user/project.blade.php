<x-app-layout>
    <div class="breadcumb-wrapper " data-bg-src="/assets/img/bg/breadcumb-bg.jpg" data-overlay="theme">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Our Projects</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    <li>Project</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
Blog Area
==============================-->
    <section class="th-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            @foreach ($projects as $project)
                <div class="row gx-40">
                    <div class="col-xxl-8 col-lg-7">
                        <div class="th-blog blog-single has-post-thumbnail">
                            <div class="blog-img">
                                <a href=""><img src="{{ $project->image }}" alt="Blog Image"></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="#"><i class="fas fa-calendar-days"></i>{{ $project->created_at }}</a>
                                </div>
                                <h2 class="blog-title"><a href="">{{ $project->name }}</a>
                                </h2>
                                <p class="blog-text">{{ $project->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-lg-5">
                        <aside class="sidebar-area">
                            <div class="widget widget_tag_cloud  ">
                                <h3 class="widget_title">Popular Tags</h3>
                                <div class="tagcloud">
                                    <a href="#">Donations</a>
                                    <a href="#">Medical equipment</a>
                                    <a href="#">Mobility/Assistive device</a>
                                    <a href="#">Fundraising</a>
                                    <a href="#">Tips</a>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            @endforeach

            <div class="th-pagination ">
                <ul>
                    <li><a href="#"><i class="fas fa-arrow-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#"><i class="fas fa-arrow-right"></i></a></li>
                </ul>
            </div>

        </div>
    </section>
</x-app-layout>
