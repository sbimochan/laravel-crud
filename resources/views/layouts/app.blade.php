<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <title>I'm Cruding @yield('title')</title>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a href="{{URL::to('nerds')}}" class="navbar-brand">Nerd Alert</a>

        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{URL::to('nerds')}}">View all nerds</a></li>
            <li><a href="{{URL::to('nerds/create')}}">Create a nerd</a></li>
        </ul>
    </nav>
    @section('body')
        @show
    <div class="container">
        @yield('content')
    </div>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>