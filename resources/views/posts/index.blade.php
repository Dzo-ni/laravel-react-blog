<!DOCTYPE html>
<html>

<head>
    <title>Blog Posts</title>
    <link href="{{ asset('css/app.css') }}"
          rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Posts</h1>
        <a href="{{ route('posts.create') }}"
           class="btn btn-primary">Create Post</a>
        @foreach ($posts as $post)
            <div>
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->body }}</p>
                <p>Posted by {{ $post->user->name }}</p>
                <a href="{{ route('posts.show', $post->id) }}">View</a>
            </div>
        @endforeach
    </div>
</body>

</html>
