<?php

namespace App\Http\Controllers;

use App\Models\User;

class AppController extends Controller
{
    public function index(User $user)
    {
        return view('layouts.app', compact('user'));
    }
}
