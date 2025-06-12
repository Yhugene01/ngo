<x-admin-layout>
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6 col-12">
                        <h2> Project list </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row project-cards">
                <div class="col-md-12 project-list">
                    <div class="card">
                        <div class="row">

                            <div class="col-md-6 d-md-block d-none">
                                <div class="form-group mb-0 me-0"> </div><a
                                    class="btn btn-primary d-flex align-items-center"
                                    href="{{ route('admin.add.project') }}"> <i data-feather="plus-square"></i>Create
                                    New Project </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card position-relative">
                    @foreach ($projects as $project)
                        <div class="card-body">

                            <div class="th-blog blog-single has-post-thumbnail">
                                <div class="project-img">
                                    <a href="blog-details.html"><img src="{{ $project->image }}"></a>
                                </div>

                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog.html"><i
                                                class="fas fa-calendar-days"></i>{{ $project->created_at }}</a>
                                    </div>
                                    <h2 class="blog-title"><a href="blog-details.html">{{ $project->name }}</a>
                                    </h2>
                                    <p class="blog-text">{{ $project->description }}</p>
                                </div>


                            </div>

                            <div>
                                <div class="d-flex">
                                    <a href="{{ route('admin.edit.project', $project->id) }}" class="btn btn-primary">
                                        Edit
                                        project
                                    </a>

                                    <a href="{{ route('admin.delete.project', $project->id) }}" class="btn btn-danger m-4">
                                        Delete
                                        Project
                                    </a>

                                </div>

                            </div>








                        </div>
                    @endforeach

                </div>


            </div>
        </div>
        <!-- Container-fluid starts  -->
    </div>
</x-admin-layout>
