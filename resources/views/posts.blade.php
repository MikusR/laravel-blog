<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<nav class="flex sm:justify-center space-x-4">

    <a href="/"
       class="rounded-lg px-3 py-2 text-slate-700 font-medium hover:bg-slate-100 hover:text-slate-900">Posts</a>

</nav>
@foreach($posts as $post)
    <article class="max-w-2xl mx-auto p-6">
        <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>
        <p class="text-gray-600 mb-4">{{ $post->desc }}</p>
        {!! $post->body !!}
        <a href="/posts/"
           class="text-blue-500 hover:underline">Read
            more</a>
    </article>
@endforeach


</body>
</html>
