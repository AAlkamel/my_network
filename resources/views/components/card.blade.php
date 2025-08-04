@props(['highlight' => false,'id' => null])
<a href="{{ $attributes->get('href', '#') }}"
    class=" relative block rounded-md border border-gray-300 p-4 shadow-sm  hover:shadow-xl sm:p-6 transition-all duration-300 ease-out">
    <div class="sm:flex sm:justify-between sm:gap-4 lg:gap-6">
        <div class="sm:order-last sm:shrink-0">
            <img alt=""
                src="https://picsum.photos/100/100?random={{ $id }}"
                class="size-16 rounded-full object-cover sm:size-[72px]" />
        </div>

        <div class="mt-4 sm:mt-0">
            <h3 class="text-lg font-medium text-pretty text-gray-900">
                {{ $title }}
            </h3>

            <div class="mt-4 line-clamp-2 text-sm text-pretty text-gray-700">
                {{ $slot }}
            </div>
        </div>
    </div>

</a>
