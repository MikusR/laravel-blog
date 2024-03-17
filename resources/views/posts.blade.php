<x-layout>

    @foreach($posts as $post)
        <article class="{{ $loop->even ? 'bg-slate-50 ' : '' }}max-w-2xl mx-auto p-6">
            <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>
            <p class="text-gray-600 mb-4">{{$post->created_at}} by <a class="text-blue-500 mb-4"
                                                                      href="/author/{{ $post->author->username }} ">{{ $post->author->name }} </a>
                in <a class="text-blue-500 mb-4"
                      href="/categories/{{ $post->category->slug }}">{{$post->category->name}}</a>
            </p>

            {!! Str::limit($post->body,150) !!}
            <a href="/posts/{{$post->slug}}"
               class="text-blue-500 hover:underline">Read
                more</a>
        </article>
    @endforeach

</x-layout>
