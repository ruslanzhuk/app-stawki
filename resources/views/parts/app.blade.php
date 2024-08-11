<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/assets/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite([
        'resources/js/app.js'
    ])
    @stack('inline-scripts')
</head>

<body id="body" class="d-flex flex-column vh-100">
<header id="header">
    <div class="background-fon">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#">Navbar</a>
            <ul class="menu">
                <li><a href="/">Contact</a></li>
                <li><a href="/">About us</a></li>
                <li><a href="/">Another</a></li>
            </ul>
        </nav>
    </div>
</header>
<div class="container flex-grow-1">
    @yield('content')
</div>

</body>
<script type="text/javascript" src="scripts/custom.js"></script>
</html>
