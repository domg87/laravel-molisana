<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('title') Molisana</title>
</head>
<body>
    @include('partials.header')
    <main>
        @yield('mainContent')
    </main>
@include('partials.footer')
<script src="{{asset('js/app.js')}}"></script>
@yield('style.js')
</body>
</html>