<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
        <h1 class="text-center text-5xl font-extrabold text-gray-900 mb-12">
            Categoría: <span class="text-teal-600">{{$tag->name}}</span>
        </h1>
        
        @foreach($posts as $post)
            <x-card-post :post="$post"/>

        @endforeach

        <div class="mt-8">
            {{$posts->links()}}
        </div>
    </div>
</x-app-layout>
