<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        @if($post)
            <h1 class="text-center">{{ $post['title'] }}</h1>
            <p class="mt-3">{{ $post['content'] }}</p>
        @else
            <h1 class="text-center text-danger">Post not found.</h1>
        @endif
        <div class="text-center mt-3">
            <a href="{{ route('post.index') }}" class="btn btn-secondary">Back to Blog</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
