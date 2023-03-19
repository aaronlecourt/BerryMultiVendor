@extends('index')
@section('title','Login')

@section('login-content')
    <div class="container-fluid login-wrap">
        <div class="testform">
            <h4>Login Your Account</h4>
            <hr>
            <form action="login" method="POST">
                @csrf
                <input class="form-control mt-3 login-name" placeholder="Your Name" type="text" name="name">
                {{-- <input class="form-control mt-3 login-email" placeholder="Your Email" type="email" name="email"> --}}
                <input class="form-control mt-3 login-pass" placeholder="Your Password" type="password" name="password">
                <br>
                <button class="btn btn-warning w-100 mt-3 login-btn" id="loginbtn" type="submit">Log in</button>
                
                <br><br>
                <span>Don't have an account? <a href="/register">Sign up Now!</a></span>
            </form>
        </div>
    </div>
@endsection