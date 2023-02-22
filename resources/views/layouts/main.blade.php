<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('lib/b5/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>My project | {{ $titulo }}</title>
</head>
<body>
    @include('shared.nav')
    <div class="container mt-5">
        @yield('content')
    </div>
    <script src="{{ asset('lib/b5/js/bootstrap.js') }}"></script>
</body>
</html>