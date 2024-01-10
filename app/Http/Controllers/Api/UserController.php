<?php

namespace App\Http\Controllers\Api;

use App\Enums\Role;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Users\StoreRequest;
use App\Http\Requests\Api\Users\UpdateRequest;
use App\Http\Requests\User\Profile\AvatarUpdateRequest;
use App\Http\Requests\User\Profile\HeaderUpdateRequest;
use App\Http\Requests\User\Profile\PersonalUpdateRequest;
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
        return view('api.user.index', compact('users'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
     */
    public function create()
    {
        $roles = Role::options();
        return view('api.user.create', compact('roles'));
    }

    /**
     * @param StoreRequest $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        User::firstOrCreate($data);
        return redirect()->route('users.index');
    }

    /**
     * @param User $user
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
     */
    public function edit(User $user)
    {
        return view('api.user.edit', compact('user'));
    }

    /**
     * @param UpdateRequest $request
     * @param User $user
     * @return RedirectResponse
     */
    public function update(UpdateRequest $request, User $user)
    {
        $data = $request->validated();
        $user->update($data);
        return redirect()->route('users.index');
    }

    /**
     * @param User $user
     * @return RedirectResponse
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }

    /**
     * @param User $user
     * @return \Illuminate\Contracts\Foundation\Application|Factory|View|Application
     */
    public function profile(User $user)
    {
        return view('user.profile', compact('user'));
    }

    /**
     * @param PersonalUpdateRequest $request
     * @param User $user
     * @return RedirectResponse
     */
    public function profilePersonalUpdate(PersonalUpdateRequest $request, User $user)
    {
        $data = $request->validated();
        $user->update($data);
        return redirect()->route('profile.index', compact('user'));
    }

    /**
     * @param AvatarUpdateRequest $request
     * @param User $user
     * @return RedirectResponse
     */
    public function profileAvatarUpdate(AvatarUpdateRequest $request, User $user)
    {
        $path = $request->file('avatar_image')?->store('avatar-images', ['disk' => 'public']);
        $user->update(['avatar_image' => $path]);
        return redirect()->back();
    }

    /**
     * @param HeaderUpdateRequest $request
     * @param User $user
     * @return RedirectResponse
     */
    public function profileHeaderUpdate(HeaderUpdateRequest $request, User $user)
    {
        $path = $request->file('header_image')?->store('header-images', ['disk' => 'public']);
        $user->update(['header_image' => $path]);
        return redirect()->back();
    }
}
