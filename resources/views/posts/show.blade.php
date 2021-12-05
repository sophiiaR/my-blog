<x-app-layout>
    <div class="container py-8">
        <h1 class="text-4xl font-bold text-gray-600">{{$post->name}}</h1>
        <div class="text-lg text-gray-500 mb-2">
            {{$post->extract}}
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2">
                <figure>
                    <img class="w-full h-80 object-cover object-center" src="{{asset(Storage::url($post->image->url))}}" alt="">
                </figure>
                <div class="text-base text-gray-500 mt-4">
                    {{$post->body}}
                </div>
            </div>

            <aside>
                <h1 class="text-2xl font-bold text-gray-600 mb-4">More in {{$post->category->name}}</h1>
                <ul>
                    @foreach ($similar as $item)
                        <li class="mb-4">
                            <a class="flex" href="{{route('posts.show', $item)}}">
                                <img class="w-40 h-25 object-cover object-center" src="{{asset(Storage::url($item->image->url))}}" alt="">
                                <span class="ml-2 text-gray-600">{{$item->name}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </aside>
        </div>
    </div>
</x-app-layout>