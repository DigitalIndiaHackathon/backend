<h1>{{ Lang::get('confide::confide.email.password_reset.subject') }}</h1>

<p>{{ Lang::get('confide::confide.email.password_reset.greetings', array( 'name' => (isset($user['username'])) ? $user['username'] : $user['email'])) }},</p>

<p>{{ Lang::get('confide::confide.email.password_reset.body') }}</p>
<a href="{{ route('auth.reset_password', array($token)) }}">
	Reset Password
</a>

<p>{{ Lang::get('confide::confide.email.password_reset.farewell') }}</p>
