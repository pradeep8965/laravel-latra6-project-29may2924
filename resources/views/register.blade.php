@extends('layouts.app')

@section('main')
<title>Register Page</title>
<h1 class="text-center" style="background-color: #fff;">REGISTERATION FORM</h1>
    @if (session('success')) 
    <div class="alert alert-success alert-dismissible fade show" role="alert"> 
        <strong>{{ session('success') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <form method="POST" action="/registration-user">
    @csrf
    @method('POST')
        <div class="mb-3">
            <label for="exampleInputName" class="form-label"  style="font-weight: bold;" >Name</label>
            <input  name="name" value="" type="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter Your Name"  style="border: 1px solid black; padding: 5px;">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"  style="font-weight: bold;" >Email address</label>
            <input  name="email" value="" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@example.com"  style="border: 1px solid black; padding: 5px;">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"  style="font-weight: bold;">Password</label>
            <input  name="password" value="" type="password" class="form-control" id="exampleInputPassword1" placeholder="xxxxxxxx"  style="border: 1px solid black; padding: 5px;" >
            <div id="passwordHelp" class="form-text">We'll never share your password with anyone else.</div>
        </div>
        <div class="mb-2">
            <label for="exampleInputcPassword1" class="form-label"  style="font-weight: bold;">Confirm Password</label>
            <input type="cpassword" class="form-control" id="exampleInputcPassword1" placeholder="xxxxxxxx"  style="border: 1px solid black; padding: 5px;" >
        </div>
        <div class="mb-2 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember Me</label>
        </div>
        <button type="submit" class="btn btn-dark">Submit</button>
    </form>
    <div class="text-center">
        <a href ="/" style=" border: 1px solid black; padding: 5px;">Go to Login Page</a>
    </div>
@endsection