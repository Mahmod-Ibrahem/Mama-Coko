@extends('layout.layouts')
@section('content')
    @include('layout.header', [
        'title' => $location->name,
        'image' => $location->image,
        'breadcrumb' => $location->name
    ])
        @include('tour::components.tour-listing')

@endsection