<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Latest Blog Posts</h1>

        <div class="list-group">
            @if(session('posts') && count(session('posts')) > 0)
                @foreach(session('posts') as $index => $post)
                    <a href="{{ route('post.show', ['post_id' => $index]) }}" class="list-group-item list-group-item-action">
                        <h5 class="mb-1">{{ $post['title'] }}</h5>
                        <p class="mb-1">{{ $post['content'] }}</p>
                    </a>
                @endforeach
            @else
                <p class="text-center">No blog posts available.</p>
            @endif
        </div>

        <div class="text-center mt-3">
            <a href="{{ route('post.create') }}" class="btn btn-primary">Create New Post</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
