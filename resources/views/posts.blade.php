@extends('app')

@section('content')
    @auth
    @include('navbar')
        <div class="p-3">
            <div class="p-3 rounded-lg shadow border bg-gray-800 border-gray-700">
                <h2 class="text-xl font-bold mb-2 text-purple-500">Create a new post</h2>
                <form action="/create-post" method="POST" class="space-y-4">
                    @csrf
                    <input type="text" name="title" placeholder="Insert Title" class="w-full p-2 border border-gray-300 rounded">
                    <textarea name="body" cols="30" rows="3" placeholder="Post...." class="w-full p-2 border border-gray-300 rounded"></textarea>
                    <button class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">Post!</button>
                </form>
            </div>
        </div>

            <div class="p-3">
                <div class="p-3 rounded-lg shadow border bg-gray-800 border-gray-700">
                    <h2 class="text-xl font-bold mb-2 text-purple-500">User Posts</h2>
                    @foreach ($posts as $post)
                        <div class="bg-purple-200 p-4 mb-4">
                            <h3 class="text-lg font-semibold">{{$post['title']}}</h3>
                            <p>by {{$post->user->name}}</p>
                            <p>{{$post['body']}}</p>
                            <p><a href="/edit-post/{{$post->id}}" class="text-purple-500 hover:text-purple-700">Edit Post</a></p>
                            <form action="/delet-post/{{$post->id}}" method="POST" class="mt-4">
                                @csrf
                                @method('DELETE')
                                <button class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="p-3">
                <div class="p-3 rounded-lg shadow border bg-gray-800 border-gray-700">
                    <h2 class="text-xl font-bold mb-2 text-purple-500">All Posts</h2>
                    @foreach ($postsAll as $post)
                        <div class="bg-purple-200 p-4 mb-4">
                            <h3 class="text-lg font-semibold">{{$post['title']}}</h3>
                            <p>by {{$post->user->name}}</p>
                            <p>{{$post['body']}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endauth
@endsection
