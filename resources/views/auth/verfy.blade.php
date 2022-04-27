@extends('layouts.guest')
@section('content')
<div class="authincation-content">
    <div class="row no-gutters">
        <div class="col-xl-12">
            <div class="auth-form">
                <h4 class="text-center mb-4">Verify Your Email Address</h4>
                @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-600">
                    <h4 class="text-center mb-4">A new verification link has been sent to the email address you provided
                        during registration.</h4>
                </div>
                @endif
                <form method="POST" action="{{ route('verification.send') }}">@csrf
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-block">Resend Verification Email</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
