<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request) {
       $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:255',
            "konfirmasipassword" => "same:password"
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        
        $validatedData['password'] = Hash::make($validatedData['password']);
        
        User::create($validatedData);
        
        // $request->session()->flash('success', 'Registration Successfull! Please Login');

        return redirect('/login')->with('success', 'Registration Successfull! Please Login');
        
    }
}
