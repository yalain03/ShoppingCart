<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>@yield('title')</title>
    <script src="https://use.fontawesome.com/8c09a1b43f.js"></script>
    <link rel="stylesheet" href="{{ URL::to('src/css/app.css') }}">


    @yield('styles')
</head>
<body>
@include('partials.header')
<div class="container">
    @yield('content')
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@yield('scripts')
</body>
</html>