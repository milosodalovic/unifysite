<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body>

<!--=== Content Part ===-->
<div class="container">

    <!--Reg Block-->
    <div class="reg-block">

        <div class="reg-block-header">
            <h2>Sign In</h2>
            <ul class="social-icons text-center">
                <li><a class="rounded-x social_facebook" data-original-title="Facebook" href="#"></a></li>
                <li><a class="rounded-x social_twitter" data-original-title="Twitter" href="#"></a></li>
                <li><a class="rounded-x social_googleplus" data-original-title="Google Plus" href="#"></a></li>
                <li><a class="rounded-x social_linkedin" data-original-title="Linkedin" href="#"></a></li>
            </ul>
            <p>Don't Have Account? Click <a class="color-green" href="{{ url('/register') }}">Sign Up</a> to register.</p>
        </div>

        <form class="sky-form" role="form" method="POST" action="{{ url('/login') }}">
            {!! csrf_field() !!}

            <!-- Email Field -->
            <label class="input has-error{{ $errors->has('email') ? ' state-error' : '' }} margin-bottom-20">
                <i class="icon-prepend fa fa-envelope"></i>
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </label>

            <!-- Password Field -->
            <label class="input has-error{{ $errors->has('email') ? ' state-error' : '' }} margin-bottom-20">
                <i class="icon-prepend fa fa-lock"></i>
                <input type="password" name="password" placeholder="Password">
                <a class="note btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </label>

            <hr>

            <!-- Remember me CheckBox -->
            <label class="checkbox">
                <input type="checkbox" name="remember"><i></i>Remember me
            </label>

            <!-- Submit Button -->
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <button type="submit" class="btn-u btn-block">Log In</button>
                </div>
            </div>

        </form>
    </div>
    <!--End Reg Block-->
</div><!--/container-->
<!--=== End Content Part ===-->

<!-- JavaScripts -->
@include('layouts.scripts')

<script type="text/javascript">
    $.backstretch([
        "unify/img/bg/19.jpg",
        "unify/img/bg/18.jpg",
    ], {
        fade: 1000,
        duration: 7000
    });
</script>

<!-- FlashMessaging -->
@include('alerts.flash')

</body>
</html>
