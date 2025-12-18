@extends('layout.layouts')
@section('title')
@endsection
@section('description')

@endsection
@section('content')
            @include('layout.header',[
            'title'=>$blog->title,
            'image'=>$blog->image,
            'breadcrumb'=>$blog->title
        ])
    <!-- INNER PAGE BANNER END -->

    <!-- SECTION START -->
    <div class="section-full xl:pt-15 pt-12.5 xl:pb-22.5 pb-5">
        <div class="container">
            <!-- BLOG SECTION START -->
            <div class="section-content">
                <div class="row flex justify-center">
                    <div class="lg:w-2/3 w-full mb-7.5">
                        <div class="trv-detail-main-wrap">
                            <div class="bg-white sm:p-10 p-5 rounded-3xl">
                                <div class="mb-7.5 text-base font-normal text-primary leading-[1.4] mb-4  ">
                                    {!! $blog->blog !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection