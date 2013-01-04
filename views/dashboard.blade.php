Welcome back {{ Auth::user()->email }}<br />
{{ HTML::link(Config::get('myauth::config.bundle_route') . '/' . Config::get('myauth::config.logout_route'), 'logout') }}