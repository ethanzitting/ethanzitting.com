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

@include('blocks.header')

<main>
    @include('blocks.hero')
    @include('blocks.card-set-vertical')

    @php
        $workHistory = [
            [
                'title' => 'Yay Lunch',
                'image' => [
                    'src' => 'resources/images/yaylunch.png',
                    'alt' => 'A screenshot of the home page of yaylunch.com',
                    'link' => 'https://yaylunch.com',
                ],
                'basis' => 'Full Time',
                'responsibilities' => [
                    'Infrastructure',
                    'Bug Fixing',
                    'Performance Improvements',
                    'New Feature Development',
                    'Refactoring away existing messes'
                ]
            ],
            [
                'title' => 'Open SGF',
                'image' => [
                    'src' => 'resources/images/open-sgf.png',
                    'alt' => 'A screenshot of the home page of opensgf.org',
                    'link' => 'https://opensgf.org',
                ],
                'basis' => 'Volunteer',
                'responsibilities' => [
                    'Infrastructure',
                    'New Development',
                    'Leading Other Devs',
                ]
            ],
            [
                'title' => 'Central States Industrial',
                'image' => [
                    'src' => 'resources/images/csi.png',
                    'alt' => 'A screenshot of the home page of csidesigns.com',
                    'link' => 'https://csidesigns.com',
                ],
                'basis' => 'Contract',
                'responsibilities' => [
                    'Bug Fixing',
                    'Refining Existing Features',
                ]
            ],
        ]
    @endphp

    <x-card-set-horizontal
        :card-data="$workHistory"
        title="Work History"
        section-anchor="work-history"
    />

    <x-call-to-action message="Tell me about your next project"/>
</main>

@include('blocks.footer')

</body>
</html>
