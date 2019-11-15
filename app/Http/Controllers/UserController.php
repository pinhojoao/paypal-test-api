<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{
    public function show()
    {
        $user = new User();
        return $this->respond($user);
    }
}
