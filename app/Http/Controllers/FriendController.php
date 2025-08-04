<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Friend;

class FriendController extends Controller
{
    public function index()
    {
        $friends = Friend::with('group')->orderBy('created_at', 'desc')->paginate(9);

        return View('friends.index', ['friends' => $friends]);
    }

    public function show($id)
    {
        $friend = Friend::with('group')->findOrFail($id);

        return View('friends.show', ['friend' => $friend]);
    }

    public function create()
    {
        return View('friends.create', ['groups' => \App\Models\Group::all()]);
    }

    public function store(Request $request)
    {
        // Save a new friend
    }

    public function edit($id)
    {
        // Show the form to edit a friend
    }

    public function update(Request $request, $id)
    {
        // Update a friend's information
    }

    public function destroy($id)
    {
        // Delete a friend
    }
}
