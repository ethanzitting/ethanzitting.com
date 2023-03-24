<section class="call-to-action">
    <h3 class="glossy-text">{{ $message }}</h3>

    <x-link-external
        to="mailto:email@example.com"
        class="button subtle-border accent-color"
    >
        <p>Get in touch</p>
        @include('icons.email')
    </x-link-external>
</section>
