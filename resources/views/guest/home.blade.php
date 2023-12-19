@auth
<x-layout>
    <x-card>

        <h3 class="text-3xl font-bold mb-4 text-center">All Projects</h3>
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
