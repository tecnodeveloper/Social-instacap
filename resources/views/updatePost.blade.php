<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<x-app-layout>
</x-app-layout>

<div class="container">
    <h2 class = "text-center h2 my-3">Edit Post</h2>
    <form action="{{ url('ConfirmPost/',$post->id) }}" method = "post" enctype="multipart/form-data" class = "form">
        @csrf
        <label for="title" class = "form-label">
            Title
        </label>
        <input type="text" name="title" id="title" class = "form-control" value = "{{ $data->title }}">
    <label for="description" class = "form-label my-3">
        Post Description
    </label>
    <input type="text" name="description" id="description" class = "form-control" value = "{{ $data->Description }}">
    <label for="" class = "form-label">
        Current Image
    </label>
    <img src="/post/{{ $data->image }}" alt="" height="400px" width="400px" class = "image my-4">

    <label for="image" class = "form-label">
        Change image
        <input type="file" name="image" id="image" class =" my-3 d-inline-block">
    </label>
    <input type="submit" value="Update Post" class = "btn btn-primary text-center mt-5">
    </form>
</div>

</body>
</html>
