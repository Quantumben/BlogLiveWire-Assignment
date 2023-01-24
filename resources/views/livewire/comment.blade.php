

<div class="mx-4">
    <h3 class="text-3xl font-bold mb-4">
        Previous Comment
    </h3>

    <div class="text-lg space-y-6">
        @foreach ($comments as $comment)
        <p>
            {{$comment->comment}}
        </p>
        @endforeach
    </div>

<form wire:submit.prevent="AddComment">

    <textarea wire:model="comment" rows="6"
    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your message...">

    </textarea>




    <div class="mt-2 flex justify-end">
        <button type="submit" class="inline-flex items-center
        rounded-md border border-transparent
        bg-indigo-600 px-4 py-2 text-sm
        font-medium text-white shadow-sm
        hover:bg-indigo-700 focus:outline-none
        focus:ring-2 focus:ring-indigo-500
        focus:ring-offset-2">Add a Comment</button>
      </div>
    </form>


    <form wire:submit.prevent="like">

        <button class="h-6 w-6 flex-shrink-0">
            <svg class="h-6 w-6 flex-shrink-0" x-description="Heroicon name: outline/face-smile" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z"></path>
              </svg>
        </button>

     </form>
</div>
