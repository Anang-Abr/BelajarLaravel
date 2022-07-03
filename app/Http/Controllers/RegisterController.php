<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {   
        return view('guest.register');
    }

    public function authenticate(Request $request)
    {
        $validData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        $validData["password"] = Hash::make($validData["password"]);

        User::create($validData);

        return redirect('login');
    }
}
