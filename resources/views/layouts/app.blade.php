<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Nunito';
        }
        .btn-pink {
            background-color: pink;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <div class="d-flex justify-content-center w-100">  <!-- Key change: Added w-100 -->
                <a href="/create"><span class="btn btn-pink btn-pink">Create Todo</span></a>
               
            </div>
        </div>
    </nav>
    <div class="container">
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
    </div>
</body>
</html>