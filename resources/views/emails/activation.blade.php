<h1>Hello</h1>
<p>
  Please click the following link to activate your account.
  <a href="{{ env('APP_URL')}}/activate/{{ $user->email }}/{{ $activationCode }}">
    Activate account.
  </a>
</p>