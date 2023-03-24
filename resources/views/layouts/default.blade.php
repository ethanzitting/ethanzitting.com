<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ethan Zitting</title>

    @vite([
        'resources/scss/main.scss',
        'resources/js/app.js',
    ])
</head>
<body class="antialiased bg-dots-darker">
@include('components.background-dots')
@include('blocks.header')

{{ $slot }}

@include('blocks.footer')
</body>
</html>
