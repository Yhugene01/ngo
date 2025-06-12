<x-app-layout>

    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="/assets/img/bg/breadcumb-bg.jpg" data-overlay="theme">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Gallery</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    <li>Gallery</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
Gallery Area
==============================-->
    <div class="overflow-hidden space">
        <div class="container">

            @foreach ($projects as $project)
                <div class="th-blog blog-single has-post-thumbnail">
                    <div class="blog-img">
                        <a href="#"><img src="{{ $project->image }}" alt="Blog Image"></a>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href="#"><i class="fas fa-calendar-days"></i>{{ $project->created_at }}</a>
                        </div>
                        <h2 class="blog-title"><a href="">{{ $project->name }}</a>
                        </h2>
                        <a href="{{ route('user.project') }}" class="th-btn btn-sm">Read More <i
                                class="fas fa-arrow-up-right ms-2"></i></a>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</x-app-layout>
