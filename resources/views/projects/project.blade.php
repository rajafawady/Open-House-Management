
<x-layout>
    
    <div class="mx-4">
      <x-card class="p-10">
        <div class="flex flex-col items-center justify-center text-center">
          <img class="w-48 mr-6 mb-6" alt="" />
  
          <h3 class="text-2xl mb-2">
            {{$project->title}}
          </h3>
          {{--}}<div class="text-xl font-bold mb-4">{{$listing->company}}</div>
  
         
  
          <div class="text-lg my-4">
            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
          </div>{{--}}
          <div class="border border-gray-200 w-full mb-6"></div>
          <div>
            <h3 class="text-3xl font-bold mb-4">Project Description</h3>
            <div class="text-lg space-y-6">
              {{$project->description}}
  
              {{--}}<a href="mailto:{{$listing->email}}"
                class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"><i
                  class="fa-solid fa-envelope"></i>
                Contact Employer</a>
  
              <a href="{{$listing->website}}" target="_blank"
                class="block bg-black text-white py-2 rounded-xl hover:opacity-80"><i class="fa-solid fa-globe"></i>
                Visit Website</a>{{--}}
            </div>
          </div>
        </div>
        <div class="border border-gray-200 w-full mb-6"></div>
        @if(!$project->isAssigned() && auth()->user()->role=="admin")
        <x-locations :projectId="$project->id" :availableLocations="$availableLocations"></x-locations>
        @endif

        @if(auth()->user()->role=="guest")
          <x-rating-form />
        @endif
      </x-card>
    </div>
    
    

</x-layout>