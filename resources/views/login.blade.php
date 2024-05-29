@extends('layouts.app')

@section('main')
<title>Login Page</title>
<h1 class="text-center" style="background-color: #fff;">LOGIN FORM</h1>
    <form method_exists="POST" action="">
    @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"  style="font-weight: bold;">Email address</label>
            <input  name="email" value="" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  style="border: 1px solid black; padding: 5px;" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"  style="font-weight: bold;">Password</label>
            <input  name="password" value="" type="password" class="form-control" id="exampleInputPassword1"  style="border: 1px solid black; padding: 5px;" placeholder="xxxxxxxx">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
        </div>
        <button type="submit" class="btn btn-dark">Submit</button>
    </form>
    <div class ="text-center">
        <a href ="/register" style=" border: 1px solid black; padding: 5px;">Go to Register Page</a>
    </div>

@endsection