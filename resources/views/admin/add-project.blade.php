<x-admin-layout>
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12 mt-4">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Create Project</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <form id="createproject-form" action="{{ route('project.store') }}" method="POST"
                enctype="multipart/form-data">@csrf
                <div class="row">
                    <div class="col-lg-8 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="">Project Title</label>
                                    <input type="text" aria-label="project Name" name="name">
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="form-group style-border col-12">
                                    <label for="">Project Description</label>
                                    <textarea name="description" id="message" cols="30" rows="3" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Project Gallery</h5>
                            </div>
                            <div class="card-body">
                                @foreach ($errors->all() as $error)
                                    <ul>
                                        <li class="text-danger">{{ $error }}</li>
                                    </ul>
                                @endforeach
                                <div class="mb-4">
                                    <h5 class="fs-14 mb-1">Project Image</h5>
                                    <p class="text-muted">Add Project Image.</p>
                                    <div class="text-center">
                                        <div class="position-relative d-inline-block">
                                            <div class="position-absolute top-100 start-100 translate-middle">
                                                <label for="project-image-input" class="mb-0" data-bs-toggle="tooltip"
                                                    data-bs-placement="right" title="Select Image">
                                                    <div class="avatar-xs">
                                                        <div
                                                            class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                            <i class="ri-image-fill"></i>
                                                        </div>
                                                    </div>
                                                </label>

                                                <input class="text-dark rounded" type="file" name="image" required>

                                                <div class="text-end mb-3">
                                                    <button type="submit" class="btn btn-success w-sm">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </form>

        </div>
        <!-- container-fluid -->
    </div>
</x-admin-layout>
