<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function show(User $user): View {

        //$user = User::findOrFail($id);

        return view('users.show', [
            'user' => $user
        ]);
    }
}
