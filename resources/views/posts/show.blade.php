<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="p-4">

<div class="container-fluid d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow p-5" style="width: 100%; max-width: 800px;">

        <h1 class="mb-4 text-center">{{ $post->title }}</h1>

        <p class="mb-4">{{ $post->body }}</p>

        <div class="d-flex justify-content-between">
            <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">
                <i class="bi bi-pencil-square"></i> Edit
            </a>

            <a href="/posts" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Back
            </a>
        </div>

    </div>
</div>

</body>
</html>
