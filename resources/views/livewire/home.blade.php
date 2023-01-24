{{-- Flash Message --}}
@include('partials.message')

<!-- Hero -->
<section class="relative h-72 bg-laravel flex flex-col justify-center align-center text-center space-y-4 mb-4">
    <div class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
        style="background-image: url('images/laravel-logo.png')"></div>

    <div class="z-10">
        <h1 class="text-6xl font-bold uppercase text-white">
            Lara<span class="text-black">Gigs</span>
        </h1>
        <p class="text-2xl text-gray-200 font-bold my-4">
            Find or post Laravel jobs & projects
        </p>
        <div>
            <a href="/post"
                class="inline-block
                border-2 border-white
                text-white py-2 px-4 rounded-xl
                uppercase mt-2
                hover:text-black
                hover:border-black
                ">Post Something</a>
        </div>
    </div>
</section>

<main>
    <!-- Search -->
    <form wire:submit.prevent="search">
        <div class="relative border-2 border-gray-100 m-4 rounded-lg">
            <div class="absolute top-4 left-3">
                <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
            </div>
            <input type="text" wire:model="title"
                class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none"
                placeholder="Search Laravel Gigs..." />
            <div class="absolute top-2 right-2">
                <button type="submit" class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600">
                    Search
                </button>
            </div>
        </div>
    </form>

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        <!-- Item 1 -->

        @foreach ($blogs as $blog)
        <div class="bg-gray-50 border border-gray-200 rounded p-6">
            <div class="flex">

                <img class="hidden w-48 mr-6 md:block" src="" alt="" />
                <div>
                    <h3 class="text-2xl">
                        <a href="/post/{{$blog->id}}"> {{$blog->title}}</a>
                    </h3>

                    <ul class="flex">
                        <li
                            class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                            <a href="#">Laravel</a>
                        </li>
                        <li
                            class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                            <a href="#">API</a>
                        </li>
                        <li
                            class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                            <a href="#">Backend</a>
                        </li>
                        <li
                            class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                            <a href="#">Vue</a>
                        </li>
                    </ul>
                    <div class="text-lg mt-4">
                        <i class="fa-solid fa-location-dot"></i> {{$blog->location}}
                    </div>

            <form wire:submit.prevent="DeletePost({{$blog->id}})">
 <button onclick="confirm('Are you sure! you want to delete this') || event.stopImmediatePropagation()"
  class="inline-flex items-center
                rounded-md border border-transparent
                bg-red-600 px-4 py-2 text-sm
                font-medium text-white shadow-sm
                hover:bg-indigo-700 focus:outline-none
                focus:ring-2 focus:ring-indigo-500
                focus:ring-offset-2">Delete Post</button>
            </form>

                </div>


            </div>

        </div>
        @endforeach
        <!-- Item 2 -->



    </div>
