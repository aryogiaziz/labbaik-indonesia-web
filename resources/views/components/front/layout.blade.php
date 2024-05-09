<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Labbaik Indonesia')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('css')

</head>

<body>
    <x-front.navbar />
    {{ $slot }}
    <x-front.footer />
</body>

@stack('script')

</html>
