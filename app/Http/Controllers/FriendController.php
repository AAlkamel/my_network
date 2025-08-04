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

    public function show(Friend $friend)
    {
        $friend->load('group');

        return View('friends.show', ['friend' => $friend]);
    }

    public function create()
    {
        return View('friends.create', ['groups' => \App\Models\Group::all()]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:18|max:100',
            'bio' => 'nullable|string|min:10|max:500',
            'skill' => 'required|integer|min:0|max:100',
            'group_id' => 'required|exists:groups,id',
        ]);

        Friend::create($validatedData);

        return redirect('/friends')->with('success', 'Friend added successfully!');
    }

    public function edit(Friend $friend)
    {
        return View('friends.edit', [
            'friend' => $friend,
            'groups' => \App\Models\Group::all()
        ]);
    }

    public function update(Request $request, Friend $friend)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:18|max:100',
            'bio' => 'nullable|string|min:10|max:500',
            'skill' => 'required|integer|min:0|max:100',
            'group_id' => 'required|exists:groups,id',
        ]);

        $friend->update($validatedData);

        return redirect('/friends')->with('success', 'Friend updated successfully!');
    }

    public function destroy(Friend $friend)
    {
        $friend->delete();

        return redirect('/friends')->with('success','"' . $friend->name . '" Friend deleted successfully!');
    }
}
