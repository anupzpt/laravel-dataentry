<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function loginUser(Request $req)
    {
        // dd($req->all());

        $req->validate([
            'email'  => 'required|email',
            'password'  =>'required',

        ]);
        if(Auth::attempt($req->only(['email', 'password',])))
        {
          return redirect()->route('entry');
        }
        else{
          return back()->with('fail','User not found ');
        }
    }
    public function registerUser(Request $req)
    {
        $req->validate([
            'name'  => 'required',
            'email'  => 'required|unique:users',
            'password'  =>'required',
        ]);
        User::create([
            'name'  => $req->name,
            'email'  => $req->email,
            'password'  =>Hash::make($req->password),
        ]);
        return redirect()->route('login');
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
