@extends('layouts.app')

@section('title', 'Create Category')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-3xl font-bold mb-6">Create New Category</h1>

    <form action="{{ route('categories.store') }}" method="POST" class="space-y-6">
        @csrf
        
        <!-- Category Name -->
        <div class="form-group">
            <label for="name" class="block text-md font-medium text-gray-700">Category Name</label>
            <input 
                type="text" 
                name="name" 
                id="name" 
                class="p-3 border form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" 
                required 
                placeholder="Enter category name"
            >
        </div>

        <!-- Category Description -->
        <div class="form-group">
            <label for="description" class="block text-md font-medium text-gray-700">Description</label>
            <textarea 
                name="description" 
                id="description" 
                rows="4" 
                class="p-3 border form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" 
                placeholder="Enter category description"
            ></textarea>
        </div>

        <!-- Submit Button -->
        <div>
            <button 
                type="submit" 
                class="btn btn-primary inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Create Category
            </button>
        </div>
    </form>
</div>
@endsection
