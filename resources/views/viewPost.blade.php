<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Post</title>
    <style>
        img{
            width:300px;
            height:300px;
        }
    </style>
</head>
<body>
    <x-app-layout>

    </x-app-layout>
    <div class = "text-center mt-3">
        <table class = "table table-bordered">
            <tr>
                <th>Post Description</th>
                <th>Image</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            <tr>
                @foreach($post as $post)
                <td>{{$post->Description}}</td>
                <td>
                    <img src="post/{{$post->image  }}" alt="">
                    </td>
                <td>
                    <a href="{{ url('updatePost',$post->id)}}" class = "btn btn-primary">Update</a>
                </td>
                <td>
                    <a onclick= "return confirm('Are you sure you want to delete')" href="{{ url('deletePost',$post->id) }}" class = "btn btn-danger">Delete</a>
                </td>
                @endforeach
            </tr>
        </table>
    </div>
</body>
</html>
