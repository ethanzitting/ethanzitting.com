<section class="hero">
    <figure>
        <div class="img-wrapper">
            <img
                src="{{ Vite::asset($imgSrc) }}"
                alt="{{ $imgAlt }}"
            >
        </div>
        <figcaption>{{ $imageCaption }}</figcaption>
    </figure>
    <h1 class="glossy-text">{{ $title }}</h1>
</section>
