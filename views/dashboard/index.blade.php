Welcome back {{ Auth::user()->email }}<br />
{{ HTML::link(Config::get('auth::config.bundle_route') . '/' . Config::get('auth::config.logout_route'), 'logout') }}