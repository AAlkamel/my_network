<x-layout>
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
        <x-slot:title>Friends Details</x-slot:title>
        <h1 class="my-10 ">Friend Details</h1>
        <div class="flex justify-end">
            <button onclick="location.href='{{ route('friends.index') }}'"
                class="mr-2 inline-block rounded-sm border border-green-600 bg-green-600/5 px-4 py-2 text-sm font-medium text-green-600 hover:bg-transparent hover:text-green-600 focus:ring-3 focus:outline-hidden">Back
                to Friends List</button>
            <button onclick="location.href='{{ route('friends.edit', $friend['id']) }}'" type="button"
                class="inline-block rounded-sm border border-blue-600 bg-blue-600/5 px-4 py-2 text-sm font-medium text-blue-600 hover:bg-transparent hover:text-blue-600 focus:ring-3 focus:outline-hidden">Edit
                Friend</button>
            <form action="{{ route('friends.destroy', $friend) }}" method="POST" class="inline-block">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="ms-2 inline-block rounded-sm border border-red-600 bg-red-600/5 px-4 py-2 text-sm font-medium text-red-600 hover:bg-transparent hover:text-red-600 focus:ring-3 focus:outline-hidden">Delete
                    Friend</button>
            </form>
        </div>
        <div class="grid lg:grid-cols-7 lg:gap-x-8 xl:gap-x-12 lg:items-center mb-16">
            <div class="lg:col-span-2 mt-10 lg:mt-0">
                <img class="w-full rounded-xl object-cover"
                    src="https://picsum.photos/1000/1000?random={{ $friend['id'] }}" alt="Hero " />
            </div>
            <div class="lg:col-span-5">
                <h3 class="block text-3xl font-bold text-gray-800 sm:text-4xl md:text-5xl lg:text-6xl">
                    {{ $friend['name'] }}</h3>
                <div
                    class="relative lg:-start-20 rounded-full py-0.5 px-2 inline-flex -mt-1  items-center gap-x-2 bg-lime-50 text-xs font-semibold text-lime-600">
                    <span>Age:</span>
                    <span>{{ $friend['age'] }}</span>
                </div>
                <p class="lg:-mt-4 text-sm text-neutral-400">{{ $friend['bio'] }}</p>

                <div class="mt-3 flex items-center gap-x-4">
                    <span class="text-xs font-semibold text-gray-600">Skill:</span>
                </div>
                {{-- progress bar --}}
                <div class="mt-1 w-3xs border border-lime-400 bg-lime-100 block rounded-full  h-2">
                    <div class="relative h-full rounded-full bg-lime-700" style="width:{{ $friend['skill'] }}%">
                        <span
                            class=" rotate-45 flex justify-center items-center w-6 h-6 top-2.5 -end-2.5 absolute text-xs font-semibold bg-lime-600 text-lime-50
                            rounded-ss-0 rounded-se-full rounded-ee-full rounded-es-full
                            border border-lime-100 shadow-sm hover:shadow-md transition-all duration-300 ease-out cursor-pointer
                            ">
                            <small class="-rotate-45">
                                {{ $friend['skill'] }}
                            </small>
                        </span>
                    </div>
                </div>
                <div class=" mt-8 bg-white/5 rounded-sm">
                    <h4 class="font-semibold">{{ $friend->group->name }}</h4>
                    <p class="text-sm text-neutral-400">{{ $friend->group->description }}</p>
                </div>

            </div>
        </div>

    </div>

</x-layout>
