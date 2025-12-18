<!--ALL BLOGS SECTION START-->

<div class="bg-paleaqua pt-5 md:pt-12.5 " style="background-image: url(assets/images/background/patern-2.png);">
    <div class="container">
        <!-- TITLE START-->
        <div class="row items-center mb-15">
            <div class="xl:w-1/3 lg:w-1/2 w-full">
                <div class="text-left">
                    <h2 class="xl:text-46 md:text-40 text-3xl mb-3.5">Explore<span class="text-citrusyellow">
                            Latest Blogs</span></h2>
                    <div class="text-base max-lg:mb-7.5"> Browse the articles below for detailed guides, local tips, and
                        itineraries to help
                        you make the most of each destination.</div>
                </div>
            </div>
            <div class="xl:w-2/3 lg:w-1/2 w-full">
                <div class="lg:text-right">
                    <a href="{{route('blog.index')}}" class="site-button butn-bg-shape">See More Blogs</a>
                </div>
            </div>
        </div>

        <!-- TITLE END-->
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-6 gap-6 max-w-7xl mx-auto">
            @forelse($blogs as $blog)
                <div class="relative mb-7.5">
                    <div class="relative overflow-hidden z-1 rounded-2xl">
                        <a href="{{route('blog.show', $blog)}}"><img src="{{ $blog->image }}" alt="{{ $blog->title }}"
                                class="w-full object-cover object-center  md:h-52.5 h-85" width="412" height="210"
                                loading="lazy"></a>
                    </div>

                    <div
                        class="size-10 text-heading text-xs leading-none bg-paleaqua text-center flex flex-col items-center justify-center rounded-md absolute uppercase right-2.5 top-2.5 z-1">
                        <span
                            class="block text-xl leading-none font-extrabold text-heading">{{ $blog->created_at->format('d') }}</span>{{ $blog->created_at->format('M') }}
                    </div>
                    <div class="bg-white py-6.25 px-5 rounded-xxl -mt-12.5 mx-5 relative z-1">
                        <div>
                            <h5 class="text-xl font-medium"><a href="{{route('blog.show', $blog)}}"
                                    class="hover:text-citrusyellow duration-500">{{ $blog->title }}</a></h5>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </div>
    <!--ALL BLOGS SECTION END-->