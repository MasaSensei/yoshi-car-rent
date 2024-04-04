<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserList;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $validate_data = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'driver_license' => 'required|string|max:255',
        ]);

        $user = new UserList();

        $user->name = $validate_data['name'];
        $user->address = $validate_data['address'];
        $user->phone_number = $validate_data['phone_number'];
        $user->driver_license = $validate_data['driver_license'];
        $user->save();

        return redirect('/register')->with('success', 'Registrasi Berhasil');
    }
}
