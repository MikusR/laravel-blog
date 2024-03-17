<x-layout>
    <h1 class="max-w-2xl mx-auto p-6 text-3xl font-bold">Categories</h1>
    @foreach($categories as $category)
        <div class="max-w-2xl mx-auto p-6 text-3xl"><a class="text-blue-500 mb-4"
                                                       href="/categories/{{ $category->slug }}">{{$category->name}}
                ({{ $category->posts->count() }})</a></div>
    @endforeach

</x-layout>
