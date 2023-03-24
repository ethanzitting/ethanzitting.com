<section class="card-set-vertical">
    <h2 class="glossy-text">{{ $title }}</h2>
    <ul>
        @foreach ($cardData as $cardDatum)
            <x-card-vertical
                :title="$cardDatum['title']"
                :iconSrc="$cardDatum['iconSrc']"
                :details="$cardDatum['details']"
            />
        @endforeach
    </ul>
</section>
