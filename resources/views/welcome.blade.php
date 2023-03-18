<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ethan Zitting</title>

    @vite([
        'resources/scss/reset.scss',
        'resources/scss/app.scss',
        'resources/js/app.js',
    ])
</head>
<body class="antialiased bg-dots-darker">
<div class="background-cover" style="background-image: url('{{ Vite::asset('resources/images/dots-light-grey.svg') }}');"></div>

<header>
    <a href="" class="email-button accent-color subtle-border">
        @include('icons.email')
    </a>
    <a href="">Get in touch</a>
    @include('components.links.github')
    <p>/</p>
    @include('components.links.linkedin')
</header>

<main>
    <section class="hero">
        <figure>
            <img src="{{ Vite::asset('resources/images/ethan-headshot.jpg') }}" alt="">
            <figcaption>Hi, I'm Ethan! 👋</figcaption>
        </figure>
        <h1 class="glossy-text">Solving Complex Problems in the Web Ecosystem</h1>
        <a
            href="#"
            class="call-to-action subtle-border accent-color"
        >
            <p>Latest Work</p>
            @include('icons.arrow-down')
        </a>
    </section>

    <section class="testimonials subtle-border accent-color">
        Testimonials, get some testimonials from Seth, Jessica, Paul.
        Show them in a slideshow, not moving too fast. May eventually
        axe the slideshow. Maybe a quote from "... Great to Work with ..." --
        Steven Records
    </section>

    <section class="services">
        <h2 class="glossy-text">Services</h2>
        <ul>
            <li class="card subtle-border accent-color">
                @include('icons.computer')
                <h3 class="glossy-text">Front End</h3>
                <p>
                    Passionate about cutting-edge, pixel-perfect, beautiful interfaces and intuitively implemented UX.
                </p>
            </li>
            <li class="card subtle-border accent-color">
                @include('icons.server')
                <h3 class="glossy-text">Back End</h3>
                <p>Keen on building scalable, secure, efficient applications, especially using Laravel.</p>
            </li>
            <li class="card subtle-border accent-color">
                @include('icons.network')
                <h3 class="glossy-text">Infrastructure</h3>
                <p>Well versed at integrating networks of systems and services to keep your stakeholders happy.</p>
            </li>
            <li class="card subtle-border accent-color">
                @include('icons.clipboard')
                <h3 class="glossy-text">Project Management</h3>
                <p>Experienced with owning complex projects from beginning to end. I know how to carry a project all the way to the finish line.</p>
            </li>
        </ul>
    </section>

    <section class="work-sample">
        <h2 class="glossy-text">Recent Work</h2>

        <figure class="subtle-border accent-color">
            <x-link-external to="https://yaylunch.com">
                <img src="{{ Vite::asset('resources/images/yaylunch.png') }}" alt="">
            </x-link-external>
            <figcaption>
                <h5 class="glossy-text">Yay Lunch</h5>
                <ul>
                    <li>Infrastructure</li>
                    <li>Bug Fixes</li>
                    <li>Performance Improvements</li>
                    <li>New Feature Development</li>
                    <li>Refactoring away existing messes.</li>
                </ul>
            </figcaption>
        </figure>

        <figure class="subtle-border accent-color">
            <x-link-external to="https://opensgf.org">
                <img src="{{ Vite::asset('resources/images/open-sgf.png') }}" alt="">
            </x-link-external>
            <figcaption>
                <h5 class="glossy-text">Open SGF</h5>
                <ul>
                    <li>Infrastructure</li>
                    <li>New Development</li>
                    <li>Setting Standards</li>
                </ul>
            </figcaption>
        </figure>

        <figure class="subtle-border accent-color">
            <x-link-external to="https://csidesigns.com">
                <img src="{{ Vite::asset('resources/images/csi.png') }}" alt="">
            </x-link-external>
            <figcaption>
                <h5 class="glossy-text">Central States Industrial</h5>
                <ul>
                    <li>Bugfixing</li>
                    <li>Refining existing features.</li>
                </ul>
            </figcaption>
        </figure>
    </section>

    <section class="last-call-to-action">
        <h3 class="glossy-text">Tell me about your next project</h3>
        <a class="call-to-action subtle-border accent-color">
            <p>Get in touch</p>
            @include('icons.email')
        </a>
    </section>
</main>


<footer>
    <p>@2023 All Rights Reserved</p>
    @include('components.links.github')
    <p>/</p>
    @include('components.links.linkedin')
</footer>

</body>
</html>
