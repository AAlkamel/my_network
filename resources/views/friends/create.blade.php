<x-layout>
    <x-slot:title>Create Friend</x-slot:title>
    <form action="/friends" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" required>
        <br>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>
        <br>
        <button type="submit">Add Friend</button>
    </form>
</x-layout>
