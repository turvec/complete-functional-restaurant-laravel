@extends('layouts.guest')
@section('content')
<div class="authincation-content">
    <div class="row no-gutters">
        <div class="col-xl-12">
            <div class="auth-form">
                <div class="text-center mb-3">
                    <a href="index.html"><img src="images/mylogo.jpg" alt=""></a>
                </div>
                <h4 class="text-center mb-4">Sign up your account</h4>
                <form method="POST" action="{{ route('register') }}">@csrf
                    <div class="form-group">
                        <label class="mb-1"><strong>Username</strong></label>
                        <input type="text" class="form-control" name="name" :value="old('name')" required autofocus autocomplete="name" >
                    </div>
                    <div class="form-group">
                        <label class="mb-1"><strong>Email</strong></label>
                        <input type="email" class="form-control" name="email" :value="old('email')" required>
                    </div>
                    <div class="form-group">
                        <label class="mb-1"><strong>Phone</strong></label>
                        <input type="text" class="form-control" name="phone" :value="old('phone')" required>
                    </div>
                    <div class="form-group">
                        <label class="mb-1"><strong>Password</strong></label>
                        <input type="password" class="form-control" name="password" required autocomplete="new-password">
                    </div>
                    <div class="form-group">
                        <label class="mb-1"><strong>Confirm Password</strong></label>
                        <input type="password" class="form-control" name="password_confirmation" required >
                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign me up</button>
                    </div>
                </form>
                <div class="new-account mt-3">
                    <p>Already have an account? <a class="text-primary" href="{{ route('login') }}">Sign in</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
