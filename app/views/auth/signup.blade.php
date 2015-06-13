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
            <h1 class="text-center">SIGN UP</h1>

            {{Form::open(array('route' => "auth.signup.post"))}}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" placeholder="Name" type="text" name="name" id="name" value="{{{ Input::old('name') }}}">
                </div>

                @if (Cache::remember('username_in_confide', 5, function() {
                    return Schema::hasColumn(Config::get('auth.table'), 'username');
                }))

                <div class="form-group">
                    <label for="username">{{{ Lang::get('confide::confide.username') }}}</label>
                    <input class="form-control" placeholder="{{{ Lang::get('confide::confide.username') }}}" type="text" name="username" id="username" value="{{{ Input::old('username') }}}">
                </div>

                @endif

                <div class="form-group">
                    <label for="email">{{{ Lang::get('confide::confide.e_mail') }}} <small>{{ Lang::get('confide::confide.signup.confirmation_required') }}</small></label>
                    <input class="form-control" placeholder="{{{ Lang::get('confide::confide.e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
                </div>

                <div class="form-group">
                    <label for="password">{{{ Lang::get('confide::confide.password') }}}</label>
                    <input class="form-control" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">
                </div>

                <div class="form-group">
                    <label for="password_confirmation">{{{ Lang::get('confide::confide.password_confirmation') }}}</label>
                    <input class="form-control" placeholder="{{{ Lang::get('confide::confide.password_confirmation') }}}" type="password" name="password_confirmation" id="password_confirmation">
                </div>

                <div class="form-group">
                    <label for="role">Role</label>
                    {{Form::select('role', Config::get('settings.roles'), Input::old('role'), array('class' => "form-control"))}}
                </div>

                <div class="form-group">
                    <label for="link">Link</label>
                    <input class="form-control" placeholder="Link" type="text" name="link" id="link" value="{{{ Input::old('link') }}}">
                    <div class="help-block">
                    A link to your facebook, twitter, github profile or website.
                    </div>
                </div>

                @if (Session::get('error'))
                <div class="alert alert-error alert-danger">
                    @if (is_array(Session::get('error')))
                    {{ head(Session::get('error')) }}
                    @endif
                </div>
                @endif

                @if (Session::get('notice'))
                <div class="alert alert-info">{{ Session::get('notice') }}</div>
                @endif

                <div class="form-actions clearfix">
                  <button type="submit" class="btn btn-success pull-right">{{{ Lang::get('confide::confide.signup.submit') }}}</button>
                </div>

            {{Form::close()}}

            <div class="padding-sm text-center">
                <a href="{{route('auth.login')}}" class="btn btn-default">Login</a>
            </div>

        </div>
    </div>
</div>
@stop