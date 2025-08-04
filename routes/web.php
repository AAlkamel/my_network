<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\FriendController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/friends', [FriendController::class, 'index'])->name('friends.index');
Route::post('/friends', [FriendController::class, 'store'])->name('friends.store');

Route::get('/friends/create', [FriendController::class, 'create'])->name('friends.create');
Route::get('/friends/{friend}', [FriendController::class, 'show'])->name('friends.show');
Route::put('/friends/{friend}', [FriendController::class, 'update'])->name('friends.update');
Route::get('/friends/{friend}/edit', [FriendController::class, 'edit'])->name('friends.edit');
Route::delete('/friends/{friend}', [FriendController::class, 'destroy'])->name('friends.destroy');
