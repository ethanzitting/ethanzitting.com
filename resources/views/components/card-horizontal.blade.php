<figure class="card-horizontal subtle-border accent-color">
    <x-link-external to="{{ $image['link'] }}">
        <img src="{{ Vite::asset($image['src']) }}" alt="{{ $image['alt'] }}">
    </x-link-external>
    <figcaption>
        <h3 class="glossy-text">{{ $title }}</h3>
        <p>{{ $description }}</p>
        <ul class="tool-icons">
            @foreach ($toolIconSources as $src)
                <li class="icon">
                    @include($src)
                </li>
            @endforeach
        </ul>
    </figcaption>
</figure>
