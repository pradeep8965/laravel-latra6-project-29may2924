<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class AuthenticationController extends Controller
{
    //
    public function store(Request $request){
        //dd($request->only('email','password'));
        $data = $request->only('name','email','password');
        //1. QueryBuilder
        //2. Eleqouent ORM 
        User::create($data);
        //with success method create a session variable name ('success'),
        return redirect('/register')->withSuccess('User Registered Successfully');
    }
                 //method (Class classObject)
    public function login(Request $request){
        //dd($request->only("email","password"));
        $credentials = $request->only("email","password");

        $user = User::where('email',$credentials['email'])->first();
        //dd($user->name);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $request->session()->put('username',$user->name);

            return redirect()->intended('dashboard');
        }
 
        return back()->withErrors([
            'email' => ' Invalid credentials',
        ])->onlyInput('email');
    }
}
