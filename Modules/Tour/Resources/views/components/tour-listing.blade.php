<div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6 max-w-7xl mx-auto py-6">
    @forelse($tours as $tour)
        @include('tour::components.tour-card', compact('tour'))
    @empty
    @endforelse
</div>