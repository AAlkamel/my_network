<x-layout>
    <x-slot:title>Friends Details</x-slot:title>
    <h1>Friend Details</h1>
    <a href="/friends">Back to all friends</a>
    <br>
    <p>Name: {{ $friend['name'] }}</p>
    <p>Age: {{ $friend['age'] }}</p>
    <p>Email: {{ $friend['email'] }}</p>
    <p>Phone: {{ $friend['phone'] }}</p>
    <p>Address: {{ $friend['address'] }}</p>
    <br>
    <br>
</x-layout>

