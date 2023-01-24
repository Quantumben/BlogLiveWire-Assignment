 <!-- Search -->
 <form action="">
     <div class="relative border-2 border-gray-100 m-4 rounded-lg">
         <div class="absolute top-4 left-3">
             <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
         </div>
         <input type="text" name="search"
             class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
             placeholder="Search Laravel Gigs..." />
         <div class="absolute top-2 right-2">
             <button type="submit" class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600">
                 Search
             </button>
         </div>
     </div>
 </form>
 <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
 </a>
 <div class="mx-4">
     <div class="bg-gray-50 border border-gray-200 p-10 rounded">
         <div class="flex flex-col items-center justify-center text-center">
             <img class="w-48 mr-6 mb-6" src="{{ asset("storage/{$Singleblogs->logo}") }}" alt="" />

             <h3 class="text-2xl mb-2">{{ $Singleblogs->title }}</h3>
             <ul class="flex">
                 <li class="bg-black text-white rounded-xl px-3 py-1 mr-2">
                     <a href="#">Laravel</a>
                 </li>
                 <li class="bg-black text-white rounded-xl px-3 py-1 mr-2">
                     <a href="#">API</a>
                 </li>
                 <li class="bg-black text-white rounded-xl px-3 py-1 mr-2">
                     <a href="#">Backend</a>
                 </li>
                 <li class="bg-black text-white rounded-xl px-3 py-1 mr-2">
                     <a href="#">Vue</a>
                 </li>
             </ul>
             <div class="text-lg my-4">
                 <i class="fa-solid fa-location-dot"></i> Daytona, FL
             </div>
             <div class="border border-gray-200 w-full mb-6"></div>
             <div>
                 <h3 class="text-3xl font-bold mb-4">
                     Job Description
                 </h3>
                 <div class="text-lg space-y-6">
                     <p>
                         {{ $Singleblogs->description }}
                     </p>

                 </div>
             </div>


             <div class="mt-2 flex justify-left">
                 <a href="/editpost/{{ $Singleblogs->id }}"
                     class="inline-flex items-center
                rounded-md border border-transparent
                bg-indigo-600 px-4 py-2 text-sm
                font-medium text-white shadow-sm
                hover:bg-indigo-700 focus:outline-none
                focus:ring-2 focus:ring-indigo-500
                focus:ring-offset-2">Edit
                     Post</a>
             </div>

             <div class="mt-2 flex justify-right">
                 {{-- <a href="javascript:void(0)" wire:click="DeletePost({{$Singleblogs->id}})" class="inline-flex items-center
                rounded-md border border-transparent
                bg-indigo-600 px-4 py-2 text-sm
                font-medium text-white shadow-sm
                hover:bg-indigo-700 focus:outline-none
                focus:ring-2 focus:ring-indigo-500
                focus:ring-offset-2">Delete Post</a> --}}


                
                {{-- <a href="javascript:void(0)"
                     onclick="confirm('Are you sure you want to remove the post') || event.stopImmediatePropagation()"
                     wire:click="delete({{$Singleblogs->id}})"
                    class="text-red-600 hover:text-red-900"
                >Delete</a> --}}

             </div>

         </div>
     </div>


     <div class="mt-2 flex justify-end">
         <a href="/comment"
             class="inline-flex items-center
        rounded-md border border-transparent
        bg-indigo-600 px-4 py-2 text-sm
        font-medium text-white shadow-sm
        hover:bg-indigo-700 focus:outline-none
        focus:ring-2 focus:ring-indigo-500
        focus:ring-offset-2">Add
             Comment</a>
     </div>

 </div>
