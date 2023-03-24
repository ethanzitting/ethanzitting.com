<section class="card-set-horizontal">
    <h2 id="{{ $sectionAnchor }}" class="glossy-text">{{ $title }}</h2>
    <ul class="cards">
        @foreach ($cardData as $cardDatum)
            <x-card-horizontal
                :title="$cardDatum['title']"
                :image="$cardDatum['image']"
                :description="$cardDatum['description']"
                :toolIconSources="$cardDatum['toolIconSources']"
            />
        @endforeach
    </ul>
</section>
