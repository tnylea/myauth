{{ Form::open(Config::get('myauth::config.bundle_route') . '/' . Config::get('myauth::config.login_route')) }}
    <!-- check for login errors flash var -->
    @if (Session::has('notification'))
        <span class="notification">{{ Session::get('notification') }}</span>
    @endif
    <!-- username field -->
    <p>{{ Form::label('email', 'Email') }}</p>
    <p>{{ Form::text('email') }}</p>
    <!-- password field -->
    <p>{{ Form::label('password', 'Password') }}</p>
    <p>{{ Form::password('password') }}</p>
    <!-- submit button -->
    <p>{{ Form::submit('Login') }}</p>
{{ Form::close() }}