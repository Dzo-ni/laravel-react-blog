<!DOCTYPE html>
<html>

<head>
    <title>Create Post</title>
    <link href="{{ asset('css/app.css') }}"
          rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Create Post</h1>
        <form action="{{ route('posts.store') }}"
              method="POST">
            @csrf
            <div>
                <label for="title">Title</label>
                <input type="text"
                       name="title"
                       id="title"
                       class="form-control">
            </div>
            <div>
                <label for="body">Body</label>
                <textarea name="body"
                          id="body"
                          class="form-control"></textarea>
            </div>
            <button type="submit"
                    class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
