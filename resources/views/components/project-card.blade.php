@props(['project'])

<a href="/projects/{{$project->id}}" class="rounded-xl border-2 @if($project->isAssigned()) border-blue-500 @else border-red-500 @endif max-w-[100px] m-2 h-[200px] overflow-hidden">
    <div class="project @if($project->isAssigned()) bg-blue-500 @else bg-red-500 @endif 
            text-white w-20 h-30 cursor-pointer p-2 overflow-hidden text-center font-bold w-[100%]">@if(isset($project->location))Location<br>
            {{$project->location}} @endif
    </div>
    <p class="text-center font-bold p-2">{{ $project->title }}</p>  
</a>