@props(['author'])
<div class="flex w-full items-center font-sans p-8 md:p-24">
    <img class="w-10 h-10 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="Avatar of Author">
    <div class="flex-1">
        <p class="text-base font-bold text-base md:text-xl leading-none">{{ $author->username }}</p>
        <p class="text-gray-600 text-xs md:text-base">{{ $author->name }}</p>
    </div>
    <div class="justify-end">
        <a href="{{ route('author', $author->username) }}"
           class="bg-transparent border border-gray-500 hover:border-green-500 text-xs text-gray-500 hover:text-green-500 font-bold py-2 px-4 rounded-full">Read
            More</a>
    </div>
</div>
