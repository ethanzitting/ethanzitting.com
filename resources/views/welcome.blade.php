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
        <h1>Solving Complex Problems in the Web Ecosystem</h1>
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
        <h2>Services</h2>
        <ul>
            <li class="card subtle-border accent-color">
                @include('icons.computer')
                <h3>Front End</h3>
                <p>Very comfortable working with modern front end frameworks,
                    using all the latest best practices.</p>
            </li>
            <li class="card subtle-border accent-color">
                @include('icons.server')
                <h3>Back End</h3>
                <p>Very comfortable working with servers, especially the MVC
                    kind. Writing highly maintainable code.</p>
            </li>
            <li class="card subtle-border accent-color">
                @include('icons.clipboard')
                <h3>Project Management</h3>
                <p>With extensive experience in Web Development and Project
                    Management, I can help you plan out your project.</p>
            </li>
            <li class="card subtle-border accent-color">
                @include('icons.network')
                <h3>Infrastructure</h3>
                <p>Let's discuss how to get our application hosted reliably and
                    efficiently.</p>
            </li>
        </ul>
    </section>

    <section class="work-sample">
        <h2>Recent Work</h2>

        <figure class="subtle-border accent-color">
            <x-link-external to="https://yaylunch.com">
                <img src="{{ Vite::asset('resources/images/yaylunch.png') }}" alt="">
            </x-link-external>
            <figcaption>
                <h5>Yay Lunch</h5>
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
                <h5>OpenSGF.org</h5>
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
                <h5>CSI</h5>
                <ul>
                    <li>Bugfixing</li>
                    <li>Refining existing features.</li>
                </ul>
            </figcaption>
        </figure>
    </section>

    <section class="last-call-to-action">
        <h3>Tell me about your next project</h3>
        <a class="call-to-action subtle-border accent-color">
            <p>
                Get in touch
            </p>
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
