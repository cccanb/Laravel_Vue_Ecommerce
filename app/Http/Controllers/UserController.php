<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\DeleteRequest;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin/user/index', compact('users'));
    }

    public function create()
    {
        return view('admin/user/create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        User::create($data);
        return redirect()->route('user.index');
    }

    public function show(User $user)
    {
        return view('admin/user/show', compact('user'));
    }

    public function update(UpdateRequest $request, User $user)
    {
        $validated = $request->validated();

        $data = [
            'name' => $validated['name'],
            'email' => $validated['email'],
        ];

        if (!empty($validated['password']))
            $data['password'] = $validated['password'];

        $user->update($data);

        return redirect()->route('user.index');
    }

    public function delete(DeleteRequest $request)
    {
        $data = $request->validated();

        foreach ($data['selected'] as $id) {
            $user = User::findOrFail($id);
            $user->delete();
        }
        return redirect()->route('user.index');
    }
}
