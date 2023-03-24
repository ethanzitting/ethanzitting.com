<section class="call-to-action">
    <h2 class="h1 glossy-text">{{ $message }}</h2>

    <x-link-external
        to="mailto:email@example.com"
        class="button subtle-border accent-color"
    >
        <p>Get in touch</p>
        @include('icons.email')
    </x-link-external>
</section>
