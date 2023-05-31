<x-layout>
    @include('partials._hero')
    @include('partials._search')
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        @if(count($loads) == 0)
            <p>No loads found</p>
        @endif

        @foreach($loads as $load)
            <x-load-card :load="$load" />
        @endforeach
        {{-- @unless(count($loads) == 0)
            @foreach($loads as $load)
                <h2>{{ $load['name'] }}</h2>
                <p>{{ $load['description'] }}</p>
            @endforeach
            @else
                <p>No loads found</p>
        @endunless --}}
    </div>
</x-layout>
