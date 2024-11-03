<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
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

        Customer::create($data);
        return redirect('/');
    }

    public function show(string $id)
    {
        $getUser = Customer::find($id);
        //return the blade view with the $getUser
    }
}
