<x-app-layout>
    <div class="container py-8">
        <h1 class="text-4xl font-bold text-gray-700">{{$post->name}}</h1>
        <div class="text-lg text-gray-600 mb-2" >
            {{$post->extract}}
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            {{-- contenido principal --}}
            <div class="lg:col-span-2">
                <figure>
                    <img src="{{ Storage::url($post->image->url)}}" class="w-full h-80 object-cover object-center" alt="">
                </figure>

                <div class="text-base text-gray-600 mt-4">
                    {{$post->body}}
                </div>
            </div>
            {{-- contenido relacionado --}}
            <aside >
                <h1 class="text-2xl font-bold text-gray-700 mb-4"> Más en {{$post->category->name}}</h1>
                <ul>
                    @foreach ($similares as $similar)
                        <li class="mb-5">
                            <a class="flex" href="{{route('posts.show', $similar)}}">
                                <img class="flex-initial h-20 w-36 object-cover object-center" src="{{Storage::url($similar->image->url)}}" alt="">
                                <span class="flex-1 ml-2 text-gray-600">{{$similar->name}}</span>
                             </a>
                        </li>
                    @endforeach
                </ul>
            </aside>
        </div>
    </div>
</x-app-layout>
