<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserList;

class UserController extends Controller
{
    public function index()
    {
        $users = UserList::all();
        return response()->json($users);
    }
}
