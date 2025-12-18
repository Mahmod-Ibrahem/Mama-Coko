<!--GALLERY SECTION START-->
<div class="bg-white pt-12 ">
    <div class="container">
        <!-- TITLE START-->
        <div class="sm:mb-15 mb-7.5 text-center max-w-150 mx-auto">
            <h2 class="xl:text-46 md:text-40 text-3xl mb-2.5">Best Memorable<span class="text-citrusyellow">
                    Gallery!</span></h2>
            <div class="-mt-7">
                <img src="assets/images/background/Title-Separator.png" alt="Image" class="w-117.5" width="270"
                    height="70" loading="lazy">
            </div>
        </div>
        <!-- TITLE END-->
        <div class="section-content">
            <div class="row mb-10">
                @foreach($galleries as $index => $gallery)
                    @if($index < 6)
                        @if($index === 0 || $index === 1)
                            {{-- First two images in column 1 --}}
                            @if($index === 0)
                                <div class="md:w-1/3 w-1/2">
                            @endif
                                <div class="relative mb-5 overflow-hidden lg:rounded-3xl rounded-xxl group">
                                    <div class="relative bg-black text-center overflow-hidden">
                                        <img src="{{ $gallery->image }}" alt="{{ $gallery->alternative }}"
                                            class="relative block duration-500 w-[110%] xl:h-62.5 lg:h-52.5 h-40 object-cover object-bottom group-hover:opacity-20"
                                            width="416" height="250" loading="lazy">
                                        <a class="elem size-10 leading-10 text-center block bg-white rounded-md text-heading text-22 absolute left-1/2 top-1/2 opacity-0 duration-500 group-hover:opacity-100 group-hover:-translate-1/2"
                                            href="{{ $gallery->image }}" title="{{ $gallery->alternative }}" data-lcl-txt=""
                                            data-lcl-author="" data-lcl-thumb="{{ $gallery->image }}"><i
                                                class="fa-solid fa-expand"></i>
                                        </a>
                                    </div>
                                </div>
                                @if($index === 1)
                                    </div>
                                @endif
                        @elseif($index === 2)
                            {{-- Third image (tall) in column 2 --}}
                            <div class="md:w-1/3 w-1/2">
                                <div class="relative mb-5 overflow-hidden lg:rounded-3xl rounded-xxl group">
                                    <div class="relative bg-black text-center overflow-hidden">
                                        <img src="{{ $gallery->image }}" alt="{{ $gallery->alternative }}"
                                            class="relative block duration-500 w-[110%] xl:h-130 lg:h-110 h-85 object-cover object-bottom group-hover:opacity-20"
                                            width="416" height="520" loading="lazy">
                                        <a class="elem size-10 leading-10 text-center block bg-white rounded-md text-heading text-22 absolute left-1/2 top-1/2 opacity-0 duration-500 group-hover:opacity-100 group-hover:-translate-1/2"
                                            href="{{ $gallery->image }}" title="{{ $gallery->alternative }}" data-lcl-txt=""
                                            data-lcl-author="" data-lcl-thumb="{{ $gallery->image }}"><i
                                                class="fa-solid fa-expand"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @elseif($index === 3)
                            {{-- Column 3 - decorative lady image --}}
                            <div class="md:w-1/3 w-1/2">
                                <div class="relative mb-5 overflow-hidden lg:rounded-3xl rounded-xxl group">
                                    <div class="relative bg-black text-center overflow-hidden">
                                        <img src="{{ $gallery->image }}" alt="{{ $gallery->alternative }}"
                                            class="relative block duration-500 w-[110%] xl:h-130 lg:h-110 h-85 object-cover object-bottom group-hover:opacity-20"
                                            width="416" height="520" loading="lazy">
                                        <a class="elem size-10 leading-10 text-center block bg-white rounded-md text-heading text-22 absolute left-1/2 top-1/2 opacity-0 duration-500 group-hover:opacity-100 group-hover:-translate-1/2"
                                            href="{{ $gallery->image }}" title="{{ $gallery->alternative }}" data-lcl-txt=""
                                            data-lcl-author="" data-lcl-thumb="{{ $gallery->image }}"><i
                                                class="fa-solid fa-expand"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @elseif($index === 4)
                            {{-- Wide image in column 4 --}}
                            <div class="lg:w-2/3 md:w-1/2 w-full">
                                <div class="relative mb-5 overflow-hidden lg:rounded-3xl rounded-xxl group">
                                    <div class="relative bg-black text-center overflow-hidden">
                                        <img src="{{ $gallery->image }}" alt="{{ $gallery->alternative }}"
                                            class="relative block duration-500 w-[110%] xl:h-62.5 lg:h-52.5 h-40 object-cover object-bottom group-hover:opacity-20"
                                            width="856" height="250" loading="lazy">
                                        <a class="elem size-10 leading-10 text-center block bg-white rounded-md text-heading text-22 absolute left-1/2 top-1/2 opacity-0 duration-500 group-hover:opacity-100 group-hover:-translate-1/2"
                                            href="{{ $gallery->image }}" title="{{ $gallery->alternative }}" data-lcl-txt=""
                                            data-lcl-author="" data-lcl-thumb="{{ $gallery->image }}"><i
                                                class="fa-solid fa-expand"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @elseif($index === 5)
                            {{-- Small images in column 5 --}}
                            <div class="lg:w-1/3 md:w-1/2 w-full">
                                <div class="row">
                                    <div class="w-1/2">
                                        <div class="relative mb-5 overflow-hidden lg:rounded-3xl rounded-xxl group">
                                            <div class="relative bg-black text-center overflow-hidden">
                                                <img src="{{ $gallery->image }}" alt="{{ $gallery->alternative }}"
                                                    class="relative block duration-500 w-[110%] xl:h-62.5 lg:h-52.5 h-40 object-cover object-bottom group-hover:opacity-20"
                                                    width="196" height="250" loading="lazy">
                                                <a class="elem size-10 leading-10 text-center block bg-white rounded-md text-heading text-22 absolute left-1/2 top-1/2 opacity-0 duration-500 group-hover:opacity-100 group-hover:-translate-1/2"
                                                    href="{{ $gallery->image }}" title="{{ $gallery->alternative }}" data-lcl-txt=""
                                                    data-lcl-author="" data-lcl-thumb="{{ $gallery->image }}"><i
                                                        class="fa-solid fa-expand"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    @if(isset($galleries[6]))
                                        <div class="w-1/2">
                                            <div class="relative mb-5 overflow-hidden lg:rounded-3xl rounded-xxl group">
                                                <div class="relative bg-black text-center overflow-hidden">
                                                    <img src="{{ $galleries[6]->image }}" alt="{{ $galleries[6]->alternative }}"
                                                        class="relative block duration-500 w-[110%] xl:h-62.5 lg:h-52.5 h-40 object-cover object-bottom group-hover:opacity-20"
                                                        width="196" height="250" loading="lazy">
                                                    <a class="elem size-10 leading-10 text-center block bg-white rounded-md text-heading text-22 absolute left-1/2 top-1/2 opacity-0 duration-500 group-hover:opacity-100 group-hover:-translate-1/2"
                                                        href="{{ $galleries[6]->image }}" title="{{ $galleries[6]->alternative }}"
                                                        data-lcl-txt="" data-lcl-author=""
                                                        data-lcl-thumb="{{ $galleries[6]->image }}"><i class="fa-solid fa-expand"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<!--GALLERY TOUR SECTION END-->