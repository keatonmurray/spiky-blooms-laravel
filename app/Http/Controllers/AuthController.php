<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:65',
            'email' => 'required|email',
            'password' => 'required|string|min:8'
        ]);

        $data['password'] = Hash::make($data['password']);

        User::create($data);
        return redirect('/');
    }

    public function show()
    {
        //user login logic here
    }
}
