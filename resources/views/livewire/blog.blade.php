<div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Create a Gig
        </h2>
        <p class="mb-4">{{$posttop}}</p>
    </header>
    <form wire:submit.prevent="StorePost">


        <div class="mb-6">
          <label for="company" class="inline-block text-lg mb-2">Post Title</label>
          <input wire:model="title" type="text" class="border border-gray-200 rounded p-2 w-full"  />

          @error('title')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>

        <div class="mb-6">
          <label for="title" class="inline-block text-lg mb-2">Post Description</label>
          <input wire:model="description" type="text" class="border border-gray-200 rounded p-2 w-full"
            placeholder="Example: Senior Laravel Developer" value="{{old('title')}}" />

          @error('title')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>

        <div class="mb-6">
          <label for="location" class="inline-block text-lg mb-2">Post Location</label>
          <input wire:model="location" type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
            placeholder="Example: Remote, Boston MA, etc" value="{{old('location')}}" />

          @error('location')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>


        <div class="mb-6">
            @if ($logo)
            Photo Preview:
            <img src="{{ $logo->temporaryUrl() }}">
            @endif

          <label for="logo" class="inline-block text-lg mb-2">
            Post Image
          </label>
          <input wire:model="logo" type="file" class="border border-gray-200 rounded p-2 w-full"  />

          @error('logo')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror

          {{-- image uploading progress --}}
          <div wire:loading wire:target="photo">Uploading...</div>
        </div>



        <div class="mb-6">
          <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
            Create Post
          </button>

          <a href="/" class="text-black ml-4"> Back </a>
        </div>
      </form>

</div>
</div>
