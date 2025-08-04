<x-layout>
    <x-slot:title>Friends List</x-slot:title>
    {{-- show success message --}}
    @if (session('success'))
        <div class="fixed top-20 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded " role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif
    <h1 class="font-bold text-center my-10">Friends List</h1>
    <button onclick="location.href='{{ route('friends.create') }}'" type="button"
        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Add
        New Friend</button>

    <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8 my-16">
        @foreach ($friends as $friend)
            <x-card :highlight="false" :id="$friend['id']" href="{{ route('friends.show', $friend['id']) }}">
                <x-slot name="title">{{ $friend['name'] }}</x-slot>
                <p>Email: {{ $friend['bio'] }}</p>
                <span
                    class="text-xs absolute -top-2 start-2 rounded-full bg-lime-100 px-2.5 py-0.5  whitespace-nowrap text-lime-600">
                    {{ $friend->group->name ?? 'No Group' }}
                </span>
            </x-card>
        @endforeach
    </div>
    <div class="my-8">
        {{ $friends->links('pagination::default') }}
    </div>
</x-layout>
