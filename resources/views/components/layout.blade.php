<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-header  :menu="[
        ['name' => 'Home', 'href' => '/'],
        ['name' => 'Friends', 'href' => route('friends.index')],

    ]"/>
    <main  class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
        {{$slot}}
    </main>
    <x-footer>

    </x-footer>
</body>
</html>
