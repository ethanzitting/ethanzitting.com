<figure class="subtle-border accent-color">
    <x-link-external to="{{ $image['link'] }}">
        <img src="{{ Vite::asset($image['src']) }}" alt="{{ $image['alt'] }}">
    </x-link-external>
    <figcaption>
        <h5 class="glossy-text">{{ $title }}</h5>
        <h6>{{ $subtitle }}</h6>
        <ul>
            @foreach ($list as $item)
                <li>{{$item}}</li>
            @endforeach
        </ul>
    </figcaption>
</figure>
