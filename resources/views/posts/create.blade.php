@extends('layouts.app')

@section('title', 'Create New Post')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-3xl font-bold mb-6">Create New Post</h1>
    <form action="{{ route('posts.store') }}" method="POST" class="space-y-6">
        @csrf
        <div class="form-group">
            <label for="title" class="block text-md font-medium text-gray-700">Title</label>
            <input type="text" class="p-3 border form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="body" class="block text-md font-medium text-gray-700">Body</label>
            <textarea class="p-3 border form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="body" name="body" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Submit</button>
    </form>
</div>
   
@endsection