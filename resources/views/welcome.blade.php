<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ethan Zitting</title>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body class="antialiased bg-dots-darker">

<header>
    <a href="" class="email-button accent-color subtle-border">
        <img src="" alt="">
        @include('icons.email')
    </a>
    <a href="">Get in touch</a>
    <a href="">Github</a>
    <p>/</p>
    <a href="">LinkedIn</a>
</header>

<main>
    <section class="hero">
        <figure>
            <img src="" alt="">
            <figcaption>Hi, I'm Ethan!</figcaption>
        </figure>
        <h1>Solving Complex Problems in the Web Ecosystem</h1>
        <button
            class="call-to-action subtle-border accent-color"
        >
            Latest Work
            @include('icons.arrow-down')
        </button>
    </section>

    <section class="testimonials subtle-border accent-color">
        Testimonials, get some testimonials from Seth, Jessica, Paul.
        Show them in a slideshow, not moving too fast. May eventually
        axe the slideshow. Maybe a quote from "... Great to Work with ..." --
        Steven Records
    </section>

    <section class="services">
        <h2>Devlopers Devlopers Devlopers Devlopers Devlopers </h2>
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
        <figure class="subtle-border accent-color">
            <a href="">
                <img src="" alt="">
            </a>
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
            <a href="">
                <img src="" alt="">
            </a>
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
            <a href="">
                <img src="" alt="">
            </a>
            <figcaption>
                <h5>CSI</h5>
                <ul>
                    <li>Bugfixing</li>
                    <li>Refining existing features.</li>
                </ul>
            </figcaption>
        </figure>

        <figure class="subtle-border accent-color">
            <a href="">
                <img src="" alt="">
            </a>
            <figcaption>
                <h5>CSI</h5>
                <ul>
                    <li>New Development</li>
                    <li>Refining existing features.</li>
                </ul>
            </figcaption>
        </figure>
    </section>

    <section class="last-call-to-action subtle-border accent-color">
        <h1>Tell me about your next project</h1>
        <div class="contact-me">
            Get in touch
            @include('icons.email')
        </div>
    </section>
</main>


<footer>
    Footer
    @2023 All Rights Reserved
    <p>Github</p>
    <p>LinkedIn</p>
</footer>

</body>
</html>
