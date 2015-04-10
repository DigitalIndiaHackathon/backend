@extends('layouts.main')
@section('main')
<!-- Main -->
<div class="main contact-section" data-section="true">
    <div class="container-sm">
        <div class="contact-area">
            <div class="logo padding-lg text-center">
                <a href="{{url('/')}}">
                    <img src="{{asset('assets/images/logo.png')}}" alt="logo" width="150px">
                </a>
            </div>
            <h1 class="text-center">RESET PASSWORD</h1>

            {{Form::open(array('route' => "auth.reset_password.post"))}}
            <input type="hidden" name="token" value="{{{ $token }}}">

            <div class="form-group">
                <label for="password">{{{ Lang::get('confide::confide.password') }}}</label>
                <input class="form-control" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">
            </div>
            <div class="form-group">
                <label for="password_confirmation">{{{ Lang::get('confide::confide.password_confirmation') }}}</label>
                <input class="form-control" placeholder="{{{ Lang::get('confide::confide.password_confirmation') }}}" type="password" name="password_confirmation" id="password_confirmation">
            </div>

            @if (Session::get('error'))
            <div class="alert alert-error alert-danger">{{{ Session::get('error') }}}</div>
            @endif

            @if (Session::get('notice'))
            <div class="alert">{{{ Session::get('notice') }}}</div>
            @endif

            <div class="form-actions clearfix">
                <button tabindex="3" type="submit" class="btn btn-primary pull-right">RESET PASSWORD</button>
            </div>

            {{Form::close()}}

            <div class="padding-sm text-center">
                <a href="{{route('auth.login')}}" class="btn btn-success">LOG IN</a>
            </div>

        </div>
    </div>
</div>
@stop
