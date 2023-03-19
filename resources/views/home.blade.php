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
<div class="background-cover"
     style="background-image: url('{{ Vite::asset('resources/images/dots-light-grey.svg') }}');"></div>

@include('modules.header')

<main>
    @include('modules.hero')
    @include('modules.vertical-card-set')
    @include('modules.horizontal-card-set')
    @include('modules.call-to-action')
</main>

@include('modules.footer')

</body>
</html>
