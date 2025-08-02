@props(['highlight' => false])
<a href="{{ $attributes->get('href', '#') }}" class="block rounded-md border border-gray-300 p-4 shadow-sm  hover:shadow-xl sm:p-6 transition-all duration-300 ease-out">
    <div class="sm:flex sm:justify-between sm:gap-4 lg:gap-6">
        <div class="sm:order-last sm:shrink-0">
            <img alt=""
                src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
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
