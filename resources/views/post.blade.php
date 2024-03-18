<x-layout>
    <!--Progress bar-->
    <div id="progress" class="h-1 bg-white shadow"
         style="background:linear-gradient(to right, #4dc0b5 var(--scroll), transparent 0);"></div>


    <!--Title-->
    <div class="text-center pt-16 md:pt-32">
        <p class="text-sm md:text-base text-green-500 font-bold">{{ $post->created_at->format('M j, Y') }}<span
                class="text-gray-900">/</span>
            <a href="{{ route('category', $post->category->slug) }}">{{ $post->category->name }}</a></p>
        <h1 class="font-bold break-normal text-3xl md:text-5xl">{{$post->title}}</h1>
    </div>

    <!--image-->
    <div class="container w-full max-w-6xl mx-auto bg-white bg-cover mt-8 rounded"
         style="background-image:url('https://source.unsplash.com/collection/1118905/'); height: 75vh;"></div>

    <!--Container-->
    <div class="container max-w-5xl mx-auto -mt-32">

        <div class="mx-0 sm:mx-6">

            <div class="bg-white w-full p-8 md:p-24 text-xl md:text-2xl text-gray-800 leading-normal"
                 style="font-family:Georgia,serif;">

                <!--Post Content-->


                <!--Lead Para-->
                <p class="text-2xl md:text-3xl mb-5">
                    {{$post->title}}
                </p>

                {!! $post->body !!}


                <blockquote class="border-l-4 border-green-500 italic my-8 pl-8 md:pl-12">{{ $post->excerpt }}
                </blockquote>


                <!--/ Post Content-->

            </div>


            <!--Author-->
            <x-author-card :author="$post->author"/>
            <!--/Author-->

        </div>


    </div>

</x-layout>
