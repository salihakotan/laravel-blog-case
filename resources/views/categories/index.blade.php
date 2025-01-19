@extends('layouts.app')

@section('title', 'All Categories')

@section('content')

<h1 class="text-5xl mt-5 text-center font-bold">All Categories</h1>

@auth()
<div class="flex justify-end">
    <button class="bg-pink-500  p-3 rounded-lg text-white my-6 mx-2">
        <a class="" href="{{ route('categories.create') }}">Create New Category</a>
    </button>
</div>
@else
{{-- <p class="text-center">Please login to create a new post</p> --}}
<div class="flex justify-end">
    <button class="bg-pink-500  p-3 rounded-lg text-white mb-8">
        <a class="" href="{{
            route('categories.create')
        }}">Create New Category</a>
    </button>
</div>

@endauth

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($categories as $category)
    <div onclick="redirectToCategory({{$category->id}})"
        class="h-64 group flex flex-col items-center justify-center cursor-pointer bg-white shadow-lg hover:bg-pink-100 transition duration-300 rounded-lg p-6">
        <h2 class="text-3xl text-center font-bold group-hover:text-5xl  group-hover:text-pink-500 transition-all duration-300">{{$category->name}}</h2>
        <p class="text-center mt-2 text-gray-500 text-sm">({{$category->post_count}} posts)</p>
    </div>
    @endforeach

@endsection

<script>
    function redirectToCategory(id){
        window.location.href = '/categories/'+id;
    }
</script>