@extends('layouts.guest')
@section('content')
<div class="authincation-content">
    <div class="row no-gutters">
        <div class="col-xl-12">
            <div class="auth-form">
                <div class="text-center mb-3">
                    <a><img src="images/mylogo.jpg" alt="" height="100"></a>
                </div>
                <h4 class="text-center mb-4">Verify Your Email Address</h4>

                @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    <h4 class="text-center mb-4">A fresh verification link has been sent to your email address.</h4>
                </div>
                @endif
                <form method="POST" action="{{ route('verification.resend') }}">@csrf
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-block">click here to request another</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
