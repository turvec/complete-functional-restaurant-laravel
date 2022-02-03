
@extends('layouts.guest')
@section('content')
<div class="authincation-content">
    <div class="row no-gutters">
        <div class="col-xl-12">
            <div class="auth-form">
                <div class="text-center mb-3">
                    <a ><img src="images/mylogo.jpg" alt="" height="100" ></a>
                </div>
                <h4 class="text-center mb-4">Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.</h4>

                    @if (session('status') == 'verification-link-sent')
                        <h4 class="text-center mb-4">A new verification link has been sent to the email address you provided during registration.</h4>
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

