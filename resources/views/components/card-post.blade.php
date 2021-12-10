@props(['post'])


<article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
    
    @if ($post->image)
        <img class="w-full h-72 object-center object-cover" src="{{asset(Storage::url($post->image->url))}}" alt="">
    @else
        <img class="w-full h-72 object-center object-cover" src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_960_720.jpg" alt=""> 
    @endif

<div class="px-6 py-4">
    <h1 class="font-bold text-xl mb-2">
        <a href="{{route('posts.show', $post)}}">{{$post->name}}</a>
    </h1>
    <div class="text-gray-700 text-base">
        {!!$post->extract!!}
    </div>
</div>

<div class="px-6 pt-4 pb-2">
    @foreach ($post->tags as $tag)
        <a href="{{route('posts.tag', $tag)}}" class="inline-block px-3 py-1 text-sm mr-2 text-gray-700 bg-gray-200 rounded-full">{{$tag->name}}</a>
    @endforeach
</div>

</article>