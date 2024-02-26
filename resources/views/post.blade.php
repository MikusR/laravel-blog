<x-layout>

    <article class="max-w-2xl mx-auto p-6">
        <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>
        <p class="text-gray-600 mb-4">{{$post->date}} by {{ $post->author }}</p>
        {!! $post->body !!}
    </article>

</x-layout>
