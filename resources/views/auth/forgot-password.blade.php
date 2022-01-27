@extends('layouts.guest')
@section('content')
<div class="authincation-content">
    <div class="row no-gutters">
        <div class="col-xl-12">
            <div class="auth-form">
                <div class="text-center mb-3">
                    <a href="{{route('home')}}"><img src="images/mylogo.jpg" alt="" height="100" ></a>
                </div>
                <h4 class="text-center mb-4">Forgot your password? No problem. Just let us know your email address and
                    we will email you a password reset link that will allow you to choose a new one.</h4>

                @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
                @endif
                <form method="POST" action="{{ route('password.email') }}">@csrf
                    <div class="form-group">
                        <label><strong>Email</strong></label>
                        <input type="email" class="form-control" name="email" :value="old('email')" required autofocus>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-block">Send Password Reset Link</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
