<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Home Page</title>
</head>
<body>
    <div class="container-fluid d-flex justify-content-between align-content-center mb-5 mt-2">
    <h1>
       Instacap
    </h1>
    <navs>
        <ul class = nav >
            <li>
                <a href="#" class = "btn fw-bold ">Home</a>
            </li>
            <li>
                <a href="#" class = "btn fw-bold ms-3">About</a>
            </li>
            @if(Route::has("login"))
            @auth
                <a href="{{ url('/dashboard') }}" class= "btn btn-success ms-3">{{ Auth::user()->name }}</a>
                @else
                <li>
                    <a href="{{Route('register')}}" class= "btn btn-primary">Register</a>
                </li>
                <li>
                    <a href="{{ route('login') }}" class = "btn btn-secondary ms-3">Login</a>
                </li>
                @endauth
            @endif

        </ul>
    </navs>
</div>
    <div class="container">
        @foreach($post as $post)
        <div class="d-flex justify-content-between align-items-center border border-secondary border-3 mt-4">
            <h2>{{ $post->title }}</h2>
            <h3>Created By: {{$post->username }}</h3>
        </div>
        <p>Created at {{$post->created_at}}</p>
        <p>{{ $post->Description }}</p>
        <img src="post/{{ $post->image }}" alt="image of post" class ="imagPost text-center">
        <hr class = "">
        @endforeach
    </div>

</body>
</html>
