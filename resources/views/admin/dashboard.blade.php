@auth
<x-layout>
    <x-card>

        <h3 class="text-3xl font-bold mb-4 text-center">All Projects</h3>

        <div class="mb-2">
            <div class="flex align-center gap-1 mb-2">
                <div class="bg-red-500 p-2 w-[20px]"></div>
                <p class="font-bold">Unassigned Locations</p>
            </div>
            <div  class="flex align-center gap-1">
                <div class="bg-blue-500 p-2 w-[20px]"></div>
                <p class="font-bold">Assigned Locations</p>
            </div>
        </div>
    <div class="">
        <div class="project-container flex flex-wrap g-5 m-auto">
            @foreach($projects as $project)
                <x-project-card :project="$project" />
            @endforeach
            
        </div>
    </div>

    </x-card>
</x-layout>
@endauth
