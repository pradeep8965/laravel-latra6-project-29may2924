<?php

namespace App\Http\Controllers;

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
        return back()->withInput();
    }
}
