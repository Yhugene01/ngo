<x-admin-layout>
    <div class="w-full lg:ps-64">
        <div class="p-6 page-content">

            <div class="flex items-center justify-between w-full mb-30 gap-5">
                <h4 class="text-xl font-medium">
                    Edit project
                </h4>


            </div>
            <div class="grid grid-cols-2">
                <div class="col-span-8 border rounded-lg ">
                    <div class="p-6 ">
                        <form action="{{ route('admin.update.project', $project->id) }}" method="POST">@csrf
                            <input label="project Name" name="name" value="{{ $project->name }}" />

                            <input label="project description" name="description" value="{{ $project->description }}" />

                            <input label="project image" name="image" type="file" src="{{ $project->image }}" />


                            <button
                                class=" mb-4 py-2.5 px-4 inline-flex rounded-lg text-sm font-medium bg-primary text-white transition-all hover:bg-primary-500">Save</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
