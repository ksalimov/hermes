<?php
/**
 * Created by PhpStorm.
 * User: Konstantin
 * Date: 2016-11-01
 * Time: 13:28
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>login</title>
    <link href="css/signing.css" rel="stylesheet">
</head>
<body>
    <a href="{{ url('/') }}">
        <img class="navigate-back" src="images/ic_arrow_back_white_24dp_2x.png">
    </a>
    <div class="container">
        <h2><span>REGISTER TO </span>HERMES</h2>
        <form id="registrationForm" role="form" method="post" action="{{ url('/register') }}" >
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name"></label>
                <input id="name" type="text" name="name" placeholder="name" value="{{ old('name') }}">

                @if($errors->has('name'))
                    <p class="error name">{{ $errors->first('name') }}</p>
                @endif
            </div>

            <div class="form-group{{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="email"></label>
                <input id="email" type="text" name="email" placeholder="email" value="{{ old('email') }}">

                @if($errors->has('email'))
                    <p class="error email">{{ $errors->first('email') }}</p>
                @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? 'has-error' : '' }}">
                <label for="password"></label>
                <input id="password" type="password" name="password" placeholder="password">

                @if($errors->has('password'))
                    <p class="error password">{{ $errors->first('password') }}</p>
                @endif
            </div>

            <div class="form-group">
                <label for="password-confirm"></label>
                <input id="password-confirm" type="password" name="password_confirmation" placeholder="confirm password">
            </div>

            <input type="submit" value="REGISTER">
            <p class="error system"></p>
        </form>
    </div>
</body>
</html>