<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="The personal website for Ethan Zitting.">

    <title>Ethan Zitting</title>

    <link rel="icon" type="image/x-icon" href="{{ Vite::asset('resources/images/ethan-headshot.webp') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ Vite::asset('resources/images/ethan-headshot.webp') }}">

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
