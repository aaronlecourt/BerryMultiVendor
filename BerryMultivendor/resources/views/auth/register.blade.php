@extends('index')
@section('title','Register')

@section('register-content')
    <div class="container-fluid login-wrap">
        <div class="testform">
            <h4>Register an Account</h4>
            <hr>
            <form action="" method="">
                <input class="form-control mt-3 register-name" placeholder="Your Name" type="text">
                <input class="form-control mt-3 register-email" placeholder="Email Address" type="email">
                <input class="form-control mt-3 register-pass" placeholder="Password" type="password">
                <input class="form-control mt-3 register-confpass" placeholder="Confirm Password" type="password">
                <br>
                <div class="radio-inputs">
                    <input type="radio" class="form-radio" name="customer" id="customer"> I am a customer
                </div>
                <div class="radio-inputs">
                    <input type="radio" class="form-radio" name="vendor" id="vendor"> I am a vendor
                </div>
                <br>
                <p>
                    Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy.
                </p>
                <div class="form-check checkterms">
                    <input class="form-check-input" type="checkbox" value="1" id="termsCond"> I agree with the Terms & Conditions.
                  </div>
                <br>
                
                <button class="btn btn-warning w-100 mt-3 regist-btn" id="loginbtn" type="submit">Register</button>
                
                <br><br>
                <span>Already have an account? <a href="/login">Login</a></span>
            </form>
        </div>
    </div>
@endsection