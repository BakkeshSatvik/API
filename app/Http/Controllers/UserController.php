<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userslist()
    {
        $users = User::get();
        return response()->json([$users]);
    }
}
