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
            <h1 class="text-center">LOG IN</h1>

            {{Form::open(array('route' => "auth.login.post"))}}
                <div class="form-group">
                    <label for="email">{{{ Lang::get('confide::confide.e_mail') }}}</label>
                    <input class="form-control" tabindex="1" placeholder="{{{ Lang::get('confide::confide.e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
                </div>
                <div class="form-group">
                <label for="password">
                    {{{ Lang::get('confide::confide.password') }}}
                </label>
                <input class="form-control" tabindex="2" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">
                </div>
                <div class="form-group clearfix">
                    <div class="checkbox pull-left">
                        <label for="remember">
                            <input tabindex="4" type="checkbox" name="remember" id="remember" value="1"> {{{ Lang::get('confide::confide.login.remember') }}}
                        </label>
                    </div>
                    <a class="pull-right btn btn-link" href="{{{ route('auth.forgot_password') }}}">{{{ Lang::get('confide::confide.login.forgot_password') }}}</a>
                </div>
                @if (Session::get('error'))
                    <div class="alert alert-error alert-danger">{{{ Session::get('error') }}}</div>
                @endif

                @if (Session::get('notice'))
                    <div class="alert alert-info">{{{ Session::get('notice') }}}</div>
                @endif
                <div class="form-actions clearfix">
                    <button tabindex="3" type="submit" class="btn btn-primary pull-right">{{{ Lang::get('confide::confide.login.submit') }}}</button>
                </div>

            {{Form::close()}}

            <div class="padding-sm text-center">
                <a href="{{route('auth.signup')}}" class="btn btn-success">Create your account</a>
            </div>

        </div>
    </div>
</div>
@stop