<x-layout>
    <h1 class="max-w-2xl mx-auto p-6 text-3xl font-bold">{{$category->name}}</h1>
    @foreach($posts as $post)
        <article class="{{ $loop->even ? 'bg-slate-50 ' : '' }}max-w-2xl mx-auto p-6">
            <h2 class="text-3xl  mb-4">{{ $post->title }}</h2>
            <p class="text-gray-600 mb-4">{{$post->date}} by {{ $post->author->name }}
            </p>

            {!! Str::limit($post->body,150) !!}
            <a href="/posts/{{$post->slug}}"
               class="text-blue-500 hover:underline">Read
                more</a>
        </article>
    @endforeach

</x-layout>
