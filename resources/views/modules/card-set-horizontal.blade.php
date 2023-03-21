<section class="card-set-horizontal">
    <h2 class="glossy-text">{{ $title }}</h2>
    @foreach ($cardData as $cardDatum)
        <x-card-horizontal
            :title="$cardDatum['title']"
            :subtitle="$cardDatum['basis']"
            :image="$cardDatum['image']"
            :list="$cardDatum['responsibilities']"
        />
    @endforeach
</section>
