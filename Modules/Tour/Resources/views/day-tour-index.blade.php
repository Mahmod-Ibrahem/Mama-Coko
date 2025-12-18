@extends('layout.layouts')
@section('title')
    Egypt Day Tours | Egypt Excursions | Egypt Sightseeing Tours
@endsection
@section('description')
    Explore the wonders of Egypt with our expert-led day tours and excursions. Discover iconic landmarks, delve into ancient
    history, and experience vibrant cultures on unforgettable sightseeing adventures tailored to your interests
@endsection
@section('content')
    <!-- CONTENT START -->
    @include('layout.header', [
        'title' => 'Egypt Day Tours & Excursions',
        'breadcrumb' => 'Day Tours',
        'image' => 'Images/day-tours.bg.jpg',
    ])

<div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6 max-w-6xl mx-auto py-6">
                        @forelse($categories as $category)
                                @include('category::components.category-card')
                        @empty
                        @endforelse
                    </div>
    </div>
    <!-- CONTENT END -->
@endsection