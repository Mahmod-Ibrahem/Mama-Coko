<div class="relative">
    @php
        $category = $category ?? $tour->category;
    @endphp
    <div class="relative overflow-hidden rounded-t-3xl">
        <a href="{{ route($tour->group . '.show', [$category, $tour]) }}"><img src="{{ $tour->tour_cover }}" alt="Image"
                class="h-65 w-full object-cover object-center" width="302" height="260" loading="lazy"></a>
    </div>
    <div class="duration-500 py-5 px-3 rounded-b-3xl bg-white flex flex-col shadow-trv-content3">
        <h3 class="text-xl font-medium mb-2.5 break-words min-h-[80px] line-clamp-2 whitespace-normal">
            <a href="{{ route($tour->group . '.show', [$category, $tour]) }}"
                class="hover:text-citrusyellow duration-500 block">
                {{ $tour->title }}
            </a>
        </h3>
        <div class="flex justify-between items-center my-2.5 shrink-0">
            <div class="text-heading font-semibold text-sm flex items-center shrink-0 my-2.5"> <i
                    class="flaticon-calendar text-xl mr-2.5"></i>
                <span class="block">{{ $tour->duration }}</span>
            </div>
            <div class="flex md:flex-row justify-start items-center gap-1 mb-1">
                <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9ZM11 12C11 11.4477 11.4477 11 12 11C12.5523 11 13 11.4477 13 12C13 12.5523 12.5523 13 12 13C11.4477 13 11 12.5523 11 12Z"
                            fill="#066168"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M21.83 11.2807C19.542 7.15186 15.8122 5 12 5C8.18777 5 4.45796 7.15186 2.17003 11.2807C1.94637 11.6844 1.94361 12.1821 2.16029 12.5876C4.41183 16.8013 8.1628 19 12 19C15.8372 19 19.5882 16.8013 21.8397 12.5876C22.0564 12.1821 22.0536 11.6844 21.83 11.2807ZM12 17C9.06097 17 6.04052 15.3724 4.09173 11.9487C6.06862 8.59614 9.07319 7 12 7C14.9268 7 17.9314 8.59614 19.9083 11.9487C17.9595 15.3724 14.939 17 12 17Z"
                            fill="#066168"></path>
                    </g>
                </svg>
                <p class="font-medium text-sm">{{$tour['visit_count']}}</p>
            </div>
        </div>
        <div class="flex justify-between">
            <div class="trv-book">
                <a href="{{ route($tour->group . '.show', [$category, $tour]) }}"
                    class="site-button outline btn-sm">Read
                    More</a>
            </div>
            <div class="flex items-center">
                <span class="text-citrusyellow text-28 leading-[1.3] font-black block mr-2.5">$
                    {{ $tour->price_six_twenty }}</span>
                <span class="text-base block text-heading font-title">Per
                    person</span>
            </div>
        </div>
    </div>
</div>