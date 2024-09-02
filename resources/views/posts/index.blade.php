<x-app-layout>
    <div class="container py-8">
        <h1 class="text-5xl font-extrabold text-center text-gray-800 md:text-6xl lg:text-7xl leading-tight tracking-tight mb-8 flex items-center justify-center">
            Gestisce al meglio le tue vacanze estive
            <svg class="w-10 h-10 ml-4 text-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M482.3 192c34.2 0 93.7 29 93.7 64c0 36-59.5 64-93.7 64l-116.6 0L265.2 495.9c-5.7 10-16.3 16.1-27.8 16.1l-56.2 0c-10.6 0-18.3-10.2-15.4-20.4l49-171.6L112 320 68.8 377.6c-3 4-7.8 6.4-12.8 6.4l-42 0c-7.8 0-14-6.3-14-14c0-1.3 .2-2.6 .5-3.9L32 256 .5 145.9c-.4-1.3-.5-2.6-.5-3.9c0-7.8 6.3-14 14-14l42 0c5 0 9.8 2.4 12.8 6.4L112 192l102.9 0-49-171.6C162.9 10.2 170.6 0 181.2 0l56.2 0c11.5 0 22.1 6.2 27.8 16.1L365.7 192l116.6 0z"/></svg>
        </h1>

        <div class="flex justify-center mb-12">
            <img src="https://as2.ftcdn.net/v2/jpg/01/96/82/11/1000_F_196821190_4yPmu9YcrwXKz1miV0RFoiykh9I7kfle.jpg" alt="Vacanze Estive" class="rounded-lg shadow-lg max-w-full h-auto">
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($posts as $post)
                <article class="relative w-full h-80 bg-cover bg-center rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300 @if($loop->first) md:col-span-2 @endif" style="background-image: url({{ Storage::url($post->image->url) }})">
                    <div class="w-full h-full px-8 flex flex-col justify-center bg-black bg-opacity-40 hover:bg-opacity-60 transition duration-300 ease-in-out">
                        <div>
                            @foreach ($post->tags as $tag)
                                <a href="{{ route('posts.tag', $tag) }}" class="inline-block px-3 h-6 bg-{{ $tag->color }}-600 text-white rounded-full">{{ $tag->name }}</a>
                            @endforeach
                        </div>
                        <h1 class="text-4xl text-white leading-8 font-bold mt-2">
                            <a href="{{ route('posts.show', $post) }}">
                                {{ $post->name }}
                            </a>
                        </h1>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="m-4">
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>
