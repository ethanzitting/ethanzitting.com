@php
$year = '@'.\Illuminate\Support\Carbon::now()->year;
@endphp
<footer class="footer">
    <p>{{ $year }} All Rights Reserved</p>
    @include('components.links.github')
    <p>/</p>
    @include('components.links.linkedin')
</footer>
