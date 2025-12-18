<!--POPULAR TOUR SECTION START-->

<div class="relative overflow-hidden z-1 bg-primary xl:pt-30 pt-12.5 xl:pb-26.5 pb-5 before:w-full before:left-0 before:top-0 before:absolute xl:before:h-143 md:before:h-125 sm:before:h-120.5 before:h-113.25 before:-z-1  before:bg-paleaqua"
    style="background-image: url(assets/images/background/patern.png);">
    <div class="container">

        <!-- TITLE START-->
        <div class="sm:mb-15 mb-7.5 text-center max-w-150 mx-auto">
            <h2 class="xl:text-46 md:text-40 text-3xl mb-2.5">Explore Popular<span class="text-citrusyellow">
                    Tours!</span></h2>
            <div class="-mt-7">
                <img src="assets/images/background/Title-Separator.png" alt="Image" class="w-117.5" width="270"
                    height="70" loading="lazy">
            </div>
        </div>
        <!-- TITLE END-->
        <!-- Tour Listing -->
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-6 gap-6 max-w-7xl mx-auto">
            @forelse($popularTours as $tour)
                @include('tour::components.tour-card', compact('tour'))
            @empty
            @endforelse
        </div>
        <!-- End of Tour Listing -->
    </div>
</div>

</div>
<!--POPULAR TOUR SECTION END-->