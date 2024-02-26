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
@foreach($posts as $post)
    <article class="max-w-2xl mx-auto p-6">
        {!! $post !!}
        <a href="/posts/{{$post->slug}}" class="text-blue-500 hover:underline">Read more</a>
    </article>
@endforeach


</body>
</html>
