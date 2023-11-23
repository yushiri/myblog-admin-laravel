<?php

namespace App\Http\Controllers;

use App\Enums\Role;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
     */
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
     */
    public function create()
    {
        $roles = Role::options();
        return view('user.create', compact('roles'));
    }

    /**
     * @param StoreRequest $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        User::create($data);
        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    public function update(UpdateRequest $request, User $user)
    {
        $data = $request->validated();
        $user->update($data);
        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }

    public function profile(User $user)
    {
        return view('user.profile', compact('user'));
    }

    public function profile_edit(UpdateRequest $request)
    {
        $user = auth()->user();
        $data = $request->validated();
        $user->update($data);
        return redirect()->route('users.profile.edit');
    }
}
