@extends('layouts.app')

@section('title', 'All Posts')


@section('content')



<h1 class="text-5xl mt-5 text-center font-bold">All Posts</h1>
@auth()
{{-- <div class="flex justify-end">
    <button class="bg-pink-500  p-3 rounded-lg text-white my-6 mx-2">
        <a class="" href="{{ route('posts.create') }}">Create New Post</a>
    </button>
</div> --}}
@else
{{-- <p class="text-center">Please login to create a new post</p> --}}
<div class="flex justify-end">
    <button class="bg-pink-500  p-3 rounded-lg text-white mb-8">
        <a class="" href="{{ route('posts.create') }}">Create New Post</a>
    </button>
</div>

@endauth



<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($posts as $post)
            <div onclick="redirectToPost({{$post->id}})" class="cursor-pointer bg-white shadow-lg hover:bg-pink-100 transition duration-300 rounded-lg p-6">
                <h2 class="text-xl font-bold">{{$post->title}}</h2>
                <p class="text-gray-600">{{Str::limit($post->content,100)}}</p>
                <p class="text-sm text-gray-500 mt-2 italic p-1">Category: {{$post->category->name}}</p>
                <a href="{{route('posts.show',$post->id)}}" class="text-blue-600 mt-4 block hover:underline">Read More...</a>
            </div>
        @endforeach
</div>

@endsection

<script>
    function redirectToPost(id){
        window.location.href = '/posts/'+id;
    }
</script>