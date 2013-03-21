{{ Form::open(Config::get('myauth::config.bundle_route') . '/' . Config::get('myauth::config.signup_route')) }}

    <!-- email field -->
    <p>{{ Form::label('email', 'Email Address') }}</p>
    <p>{{ Form::text('email', Input::old('email')) }}</p>
    <?php if($errors->has('email')) echo '<p class="error">'.$errors->first('email').'</p>'; ?>
    
    <!-- password field -->
    <p>{{ Form::label('password', 'Password') }}</p>
    <p>{{ Form::password('password') }}</p>
    <?php if($errors->has('password')) echo '<p class="error">'.$errors->first('password').'</p>'; ?>

    <!-- confirm password field -->
    <p>{{ Form::label('password_confirmation', 'Confirm Password') }}</p>
    <p>{{ Form::password('password_confirmation') }}</p>
    

    <!-- submit button -->
    <p>{{ Form::submit('signup', array('class' => 'alert button', 'onclick' => 'return validate()')) }}</p>
    
{{ Form::close() }}