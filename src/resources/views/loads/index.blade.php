<x-layout>
    @include('partials._hero')
    @include('partials._search')
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        <h1>{{ $header }}</h1>
    </div>
    <p>No loads found</p>
</x-layout>
