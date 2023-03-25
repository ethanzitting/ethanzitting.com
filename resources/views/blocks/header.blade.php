<header class="header">
    <x-link-external
        to="mailto:ethan@ethanzitting.com"
        class="email-button glossy-link accent-color subtle-border"
    >
        <p hidden>Email Me</p>
        @include('icons.email')
    </x-link-external>
    <x-link-external
        to="mailto:ethan@ethanzitting.com"
        class="glossy-link"
    >
        Get in touch
    </x-link-external>
    @include('components.links.github')
    <p>/</p>
    @include('components.links.linkedin')
</header>
