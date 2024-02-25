<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Post</title>
</head>
<body>
    @auth
        <h2>Hello {{ Auth::user()->name }}!!, You're Log In pal, That's Awesome</h2>
        <form action="/logout" method="POST">
            @csrf
            <button>Log Out</button>
        </form>
        <div style="border: 2px solid grey;">
            <h2>Create a new post</h2>
            <form action="/create-post" method="POST">
                @csrf
                <input type="text" name="title" placeholder="Insert Title">
                <textarea name="body" cols="30" rows="1" placeholder="Post...."></textarea>
                <button>Post!</button>
            </form>
        </div>
        <div style="border: 2px solid grey; margin: 10px;">
            <h2>User Posts</h2>
            @foreach ($posts as $post)
                <div style="background-color: pink; padding: 10px; margin: 10px">
                    <h3>{{$post['title']}}</h3><p>by {{$post->user->name}}</p>
                    {{$post['body']}}
                    <p><a href="/edit-post/{{$post->id}}">Edit Post</a></p>
                    <form action="/delet-post/{{$post->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                </div>
            @endforeach
        </div>
        <div style="border: 2px solid grey; margin: 10px;">
            <h2>All Posts</h2>
            @foreach ($postsAll as $post)
                <div style="background-color: pink; padding: 10px; margin: 10px">
                    <h3>{{$post['title']}}</h3><p>by {{$post->user->name}}</p>
                    {{$post['body']}}
                </div>
            @endforeach
        </div>
        @else
        <div style="border: 3px solid grey;">
            <h2>Register</h2>
            <form action="/register" method="POST">
                @csrf
                <input name="name" type="text" placeholder="Name" >
                <input name="email" type="text" placeholder="E-Mail">
                <input name="password" type="password" name="" id="" placeholder="Password" >
                <button>Register</button>
            </form>
        </div>
         <div style="border: 3px solid grey;">
            <h2>Log In</h2>
            <form action="/login" method="POST">
                @csrf
                <input name="loginname" type="text" placeholder="Name" >
                <input name="loginemail" type="text" placeholder="E-Mail">
                <input name="loginpassword" type="password" name="" id="" placeholder="Password" >
                <button>Log In</button>
            </form>
        </div>
    @endauth
</body>
</html>
