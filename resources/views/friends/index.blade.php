<x-layout>
    <x-slot:title>Friends List</x-slot:title>
    <h1 class="font-bold text-center my-10">Friends List</h1>
    <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Green</button>

    <a href="/friends/create" class="inline-block rounded-sm border border-green-600 bg-green-600/5 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-green-600 focus:ring-3 focus:outline-hidden">Add New Friend</a>
    <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8 my-16">
        @foreach ($friends as $friend)
            <x-card :highlight="false" href="/friends/{{ $friend['id'] }}">
                <x-slot name="title">{{ $friend['name'] }}</x-slot>
                <p>Email: {{ $friend['email'] }}</p>
            </x-card>
        @endforeach
    </div>
</x-layout>
