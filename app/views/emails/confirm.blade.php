<h1>{{ Lang::get('confide::confide.email.account_confirmation.subject') }}</h1>

<p>{{ Lang::get('confide::confide.email.account_confirmation.greetings', array('name' => (isset($user['username'])) ? $user['username'] : $user['email'])) }},</p>

<p>{{ Lang::get('confide::confide.email.account_confirmation.body') }}</p>
<a href='{{{ route( "auth.confirm", $user['confirmation_code'] ) }}}'>
	Confirm my Account
</a>

<p>{{ Lang::get('confide::confide.email.account_confirmation.farewell') }}</p>
