<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/friends', function() {
    $friends = [
        ['id' => 1, 'name' => 'Bob', 'age' => 30, 'email' => 'bob@example.com', 'phone' => '987-654-3210', 'address' => '456 Oak St'],
        ['id' => 2, 'name' => 'Alice', 'age' => 25, 'email' => 'alice@example.com', 'phone' => '123-456-7890', 'address' => '123 Maple St'],
        ['id' => 3, 'name' => 'Charlie', 'age' => 28, 'email' => 'charlie@example.com', 'phone' => '555-555-5555', 'address' => '789 Pine St'],
        ['id' => 4, 'name' => 'Diana', 'age' => 22, 'email' => 'diana@example.com', 'phone' => '111-111-1111', 'address' => '321 Elm St'],
        ['id' => 5, 'name' => 'Ethan', 'age' => 35, 'email' => 'ethan@example.com', 'phone' => '222-222-2222', 'address' => '654 Cedar St'],
    ];
    return View('friends.index', ['friends' => $friends]);
});
Route::get('/friends/create', function() {
    return View('friends.create');
});
Route::get('/friends/{id}', function($id) {
        $friends = [
        ['id' => 1, 'name' => 'Bob', 'age' => 30, 'email' => 'bob@example.com', 'phone' => '987-654-3210', 'address' => '456 Oak St'],
        ['id' => 2, 'name' => 'Alice', 'age' => 25, 'email' => 'alice@example.com', 'phone' => '123-456-7890', 'address' => '123 Maple St'],
        ['id' => 3, 'name' => 'Charlie', 'age' => 28, 'email' => 'charlie@example.com', 'phone' => '555-555-5555', 'address' => '789 Pine St'],
        ['id' => 4, 'name' => 'Diana', 'age' => 22, 'email' => 'diana@example.com', 'phone' => '111-111-1111', 'address' => '321 Elm St'],
        ['id' => 5, 'name' => 'Ethan', 'age' => 35, 'email' => 'ethan@example.com', 'phone' => '222-222-2222', 'address' => '654 Cedar St'],

    ];
    $friend = collect($friends)->firstWhere('id', $id);
    return View('friends.show', ['friend' => $friend]);
});
