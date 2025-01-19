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
            <textarea class="p-3 border form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" id="body" name="content" rows="5" required></textarea>
        </div>
        
        <!-- Category Select Box -->
        <div class="form-group">
            <label for="category_id" class="block text-md font-medium text-gray-700">Category</label>
            <select name="category_id" id="category_id" class="p-3 border form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                <option value="" disabled selected>Select a Category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Create</button>
   
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    </form>
</div>
@endsection
