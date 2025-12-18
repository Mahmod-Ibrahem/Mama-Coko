@extends('layout.layouts')
@section('title')
    Mr Egypt Tours | Discover Authentic Egypt with Unforgettable Tours
@endsection
@section('description')
    Explore the wonders of Egypt with Mr Egypt Tours. Offering personalized and unforgettable travel experiences across
    iconic destinations like Cairo, Luxor, and the pyramids. Your adventure awaits!
@endsection
@section('title')
    MrEgyptTorus
@endsection
@section('content')
    <!-- LOADING AREA START ===== -->
    {{-- @include('layout.loading-start') --}}
    <!-- LOADING AREA  END ===== -->
    @include('layout.cursor-pointer')

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <!-- CONTENT START -->
            <div class="page-content">
                @include('home::banner')
                @include('home::popular-destination')
                @include('home::popular-tours')
                @include('home::gallery')
                @include('home::why-choose-us')
                {{-- @include('home::counter') --}}
                @include('home::blogs')
                @include('shared::testimonial')
            </div>
            <!-- CONTENT END -->
        </div>
    </div>
@endsection