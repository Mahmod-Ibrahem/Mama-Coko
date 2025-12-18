<div class="relative z-1 group w-full">
    <div class="rounded-3xl overflow-hidden relative shadow-lg h-125">
        <a href="{{ route("$category->type.view", $category) }}" class="block w-full h-full">
            <img src="{{ $category->image }}" alt="{{ $category->name }}"
                class="w-full h-full object-cover object-center transition-transform duration-700 ease-in-out group-hover:scale-110"
                width="400" height="500" loading="lazy">
            <div class="absolute inset-0 bg-black/10 group-hover:bg-black/0 transition-colors duration-500"></div>
        </a>

        <div class="absolute bottom-5 left-5 right-5 z-20">
            <h3 class="text-2xl font-bold">
                <a href="{{ route("$category->type.view", $category) }}"
                    class="block text-primary bg-white/95 backdrop-blur-sm text-center py-4 rounded-2xl shadow-md transition-all duration-300 group-hover:bg-primary group-hover:text-white group-hover:shadow-xl group-hover:-translate-y-1">
                    {{ $category->name }}
                </a>
            </h3>
        </div>
    </div>
</div>