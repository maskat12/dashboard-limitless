@extends('layouts.app')

@section('content')
<div class="content d-flex justify-content-center align-items-center">
    <form class="login-form form-click-disabled" method="POST" action="{{url('login')}}">
        {{ csrf_field() }}
        <div class="card mb-0">
            <div class="card-body">
                <div class="text-center mb-3">
                    <i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
                    <h5 class="mb-0">Login to your account</h5>
                    <span class="d-block text-muted">Enter your credentials below</span>
                    @if ($errors->has('message'))
                    <span class="help-block text-center">
                        <strong class="text-danger">{{$errors->first('message')}}</strong>
                    </span>
                    @endif
                    @if ($errors->has('username') || $errors->has('email'))
                        <span class="help-block text-center">
                            <strong class="text-danger">{{ $errors->first('username') ? $errors->first('username') : $errors->first('email')}}</strong>
                        </span>
                    @endif
                    @if ($errors->has('password'))
                        <span class="help-block text-center">
                            <strong class="text-danger">{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                @if($errors->has('inactive_user'))
                    @php 
                        $inactive_data = json_decode($errors->first('inactive_user'));
                    @endphp
                    @if($inactive_data->is_active == 0)
                    <div class="alert alert-info border-0 text-center">
                        <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                        <span class="font-weight-semibold text-danger">Account Not Activated!</span><p>Check your email to activate this account or if you didnt receive any email you can try to <br><a href="{{route('resend')}}" class="alert-link">Request New Confirmation Email</a>.
                    </div>
                    @elseif($inactive_data->is_active == 2)
                    <div class="alert alert-danger border-0 text-center">
                        <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                        <span class="font-weight-semibold">Account Suspended!</span><p>Your account has been suspended until <br><strong>{{date('d F Y',strtotime($inactive_data->suspended_expired))}}</strong>.
                    </div>
                    @elseif($inactive_data->is_active == 3)
                    <div class="alert alert-danger border-0 text-center">
                        <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                        <span class="font-weight-semibold">Your Account has been Banned!</span>
                    </div>
                    @else
                    
                    @endif
                @endif
                <div class="form-group form-group-feedback form-group-feedback-left">
                    <input type="text" class="form-control" placeholder="Username" name="username" value="{{ old('email') ? old('email') : old('username')}}" required>
                    <div class="form-control-feedback">
                        <i class="icon-user text-muted"></i>
                    </div>
                </div>

                <div class="form-group form-group-feedback form-group-feedback-left">
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                    <div class="form-control-feedback">
                        <i class="icon-lock2 text-muted"></i>
                    </div>
                </div>
                <div class="form-group d-flex align-items-center">
                    <div class="form-check mb-0">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" class="remember-me-check" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                    </div>
                    <a href="{{ route('password.request') }}" class="ml-auto">Forgot password?</a>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 ml-2"></i></button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
