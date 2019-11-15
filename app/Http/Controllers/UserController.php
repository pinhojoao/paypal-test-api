<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{
    public function show()
    {
        $user = User::first();
        return $this->respond($user);
    }
}
