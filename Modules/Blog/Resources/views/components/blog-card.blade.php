<div class="lg:w-1/3 md:w-1/2 w-full">
    <div class="relative mb-7.5">
        <div class="relative z-1 rounded-2xl overflow-hidden">
            <a href="{{ route('blog.show', $blog->slug) }}"><img src="{{ $blog->image }}" alt="Image"
                    class="w-full object-cover object-center xl:h-113.25 md:h-97.5 h-85" width="416" height="453"
                    loading="lazy"></a>
        </div>

        <div
            class="size-20 text-heading text-base leading-none bg-paleaqua text-center flex flex-col items-center justify-center rounded-md absolute uppercase right-2.5 top-2.5 z-1">
            <span
                class="block text-4xl leading-none font-extrabold text-heading">{{ $blog->created_at->format('d') }}</span>{{ $blog->created_at->format('M') }}
        </div>
        <div class="p-7.5 pt-15 rounded-xxl absolute z-1 bottom-0 left-0 w-full bg-linear-(--bg2-gradient)">
            <div class="">
                <h3 class="md:text-28 text-22 !text-white"><a href="{{ route('blog.show', $blog->slug) }}"
                        class="hover:text-citrusyellow duration-500">{{ $blog->title }}</a></h3>
            </div>
        </div>
    </div>
</div>