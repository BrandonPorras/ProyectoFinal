<?php

namespace INTEGRATEITM\Http\Controllers;

use Illuminate\Http\Request;

use INTEGRATEITM\User;
use INTEGRATEITM\Publication;


class UserController extends Controller
{
    public function show(User $user)
    {
        return view('user.show', ['user'=> $user]);
    }
}
