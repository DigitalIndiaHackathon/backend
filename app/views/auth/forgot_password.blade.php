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
            <h1 class="text-center">FORGOT PASSWORD</h1>
            {{Form::open(array('route' => "auth.forgot_password.post"))}}

            <div class="form-group">
                <label for="email">{{{ Lang::get('confide::confide.e_mail') }}}</label>
                <input class="form-control" placeholder="{{{ Lang::get('confide::confide.e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
            </div>

            <div class="form-actions clearfix">
                <button tabindex="3" type="submit" class="btn btn-primary pull-right">CONTINUE</button>
            </div>

            @if (Session::get('error'))
            <div class="alert alert-error alert-danger">
                {{{ Session::get('error') }}}
            </div>
            @endif

            @if (Session::get('notice'))
            <div class="alert">{{{ Session::get('notice') }}}</div>
            @endif
            {{Form::close()}}

            <div class="padding-sm text-center">
            <a href="{{route('auth.login')}}" class="btn btn-default">Log in</a>
            </div>

        </div>
    </div>
</div>
@stop