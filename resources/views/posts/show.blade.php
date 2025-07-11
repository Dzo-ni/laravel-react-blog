<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <p>Posted by {{ $post->user->name }}</p>


    <div>
        <h3>Comments</h3>
        @foreach ($post->comments as $comment)
            <p>{{ $comment->body }}</p>
            <p>Posted by {{ $comment->user->name }}</p>
        @endforeach
    </div>

</body>

</html>
