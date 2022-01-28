@extends('layouts.guest')
@section('content')
<div class="authincation-content">
    <div class="row no-gutters">
        <div class="col-xl-12">
            <div class="auth-form">
                <div class="text-center mb-3">
                    <a><img src="images/mylogo.jpg" alt="" height="100"></a>
                </div>
                <h4 class="text-center mb-4">Create new password</h4>

                @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
                @endif
                <form method="POST" action="{{ route('password.update') }}">@csrf

                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <div class="form-group">
                        <label><strong>Email</strong></label>
                        <input type="email" class="form-control" name="email" :value="old('email', $request->email)"
                            required autofocus>
                    </div>
                    <div class="form-group">
                        <label><strong>Password</strong></label>
                        <input type="password" class="form-control" name="password" required
                            autocomplete="new-password">
                    </div>
                    <div class="form-group">
                        <label><strong>Confirm Password</strong></label>
                        <input type="password" class="form-control" name="password_confirmation" required
                            autocomplete="new-password">
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
