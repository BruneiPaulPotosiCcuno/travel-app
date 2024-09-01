@props(['post'])

<article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-2xl duration-300 ease-in-out border border-gray-200">
    <img class="w-full h-72 object-cover" src="{{Storage::url($post->image->url)}}" alt="{{ $post->name }}">
    <div class="p-8">
        <h2 class="text-3xl font-bold mb-4">
            <a href="{{route('posts.show', $post)}}" class="text-teal-600 hover:text-teal-800 hover:underline transition-colors duration-200">{{$post->name}}</a>
        </h2>

        <div class="text-gray-700 text-lg mb-6">
            {{$post->extract}}
        </div>

        <div class="flex flex-wrap gap-3">
            @foreach ($post->tags as $tag)
                <a href="{{route('posts.tag', $tag)}}" class="inline-block bg-teal-100 text-teal-800 rounded-full px-4 py-2 text-sm font-medium hover:bg-teal-200 transition-colors duration-200">{{$tag->name}}</a>
            @endforeach
        </div>
    </div>
</article>