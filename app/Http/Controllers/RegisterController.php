<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function crearUser()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->request->add(["username" => Str::slug($request->username)]);

        $this->validate($request, [
            "name" => "required|max:30",
            "username" => "required|max:15|unique:users|min:3",
            "email" => "required|unique:users|email|max:65",
            "password" => "required|confirmed|min:8"
        ]);

        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "username" => $request->username,
        ]);

        auth()->attempt([
            "email" => $request->email,
            "password" => $request->password,
        ]);

        return redirect()->route("posts.index");
    }
}
