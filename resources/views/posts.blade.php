<x-layout>

    @foreach($posts as $post)
        <article class="{{ $loop->even ? 'bg-slate-50 ' : '' }}max-w-2xl mx-auto p-6">
            <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>
            <p class="text-gray-600 mb-4">{{$post->date}} by {{ $post->author }}</p>
            {!! Str::limit($post->body,150) !!}
            <a href="/posts/{{$post->id}}"
               class="text-blue-500 hover:underline">Read
                more</a>
        </article>
    @endforeach

</x-layout>
