@extends('layouts.app')

@section('title', 'Post Detail')

@section('content')

<h1 class="text-4xl">
    {{$post->title}}
</h1>

<p class="mt-5">{{$post->content}}</p>


@endsection