@extends('app')

@section('content')
<div class="p-3 rounded-lg shadow border bg-gray-800 border-gray-700 m-4">
    <h1 class="text-xl font-bold mb-2 text-purple-500">Edit Post</h1>
    <form action="/edit-post/{{$post->id}}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{$post->title}}">
        <textarea class="w-full p-2 border border-gray-300 rounded" name="body" cols="30"
            rows="3">{{$post->body}}</textarea>
        <button class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">Save Edit</button>
    </form>
</div>
@endsection