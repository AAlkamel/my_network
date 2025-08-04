<x-layout>
    <x-slot:title>Create Friend</x-slot:title>
    <form action="/friends" method="POST" class="max-w-2xl mx-auto my-10 space-y-6">
        @csrf
        <label for="name" class="mt-4">
            <span class="text-sm font-medium text-gray-700">Name</span>
            <input type="text" id="name" name="name" required
                class="mt-1.5 w-full bg-white shadow-sm rounded p-1 text-sm" />
        </label>
        <label for="age" class="mt-4">
            <span class="text-sm font-medium text-gray-700">Age</span>

            <input type="number" id="age" name="age" required
                class="mt-1.5 w-full bg-white shadow-sm rounded p-1 text-sm" />
        </label>
        <label for="bio" class="mt-4">
            <span class="text-sm font-medium text-gray-700">Bio</span>

            <textarea id="bio" name="bio" rows="3" required
                class="mt-1.5 w-full bg-white shadow-sm rounded p-1 text-sm"></textarea>
        </label>
        <label for="skill" class="mt-4">
            <span class="text-sm font-medium text-gray-700">Skill Level (0-100)</span>
            <input type="number" id="skill" name="skill" min="0" max="100" required
                class="mt-1.5 w-full bg-white shadow-sm rounded p-1 text-sm" />
        </label>
        <label for="group_id" class="mt-4">
            <span class="text-sm font-medium text-gray-700">Group</span>
            <select id="group_id" name="group_id"
                class="mt-1.5 w-full bg-white shadow-sm rounded p-1 text-sm" />.5 text-sm">
                <option value="">Select Group</option>
                @foreach ($groups as $group)
                    <option value="{{ $group->id }}">{{ $group->name }}</option>
                @endforeach
            </select>



            <button type="submit"
                class="mx-auto my-4 inline-block rounded-sm border border-green-600 bg-green-600/5 px-4 py-2 text-sm font-medium text-green-600 hover:bg-transparent hover:text-green-600 focus:ring-3 focus:outline-hidden">Add
                Friend</button>
    </form>
</x-layout>
