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
            <h2>Sign Up</h2>
            <ul class="social-icons text-center">
                <li><a class="rounded-x social_facebook" data-original-title="Facebook" href="#"></a></li>
                <li><a class="rounded-x social_twitter" data-original-title="Twitter" href="#"></a></li>
                <li><a class="rounded-x social_googleplus" data-original-title="Google Plus" href="#"></a></li>
                <li><a class="rounded-x social_linkedin" data-original-title="Linkedin" href="#"></a></li>
            </ul>
            <p>Already Signed Up? Click <a class="color-green" href="{{ url('/login') }}">Sign In</a> to login to your account.</p>
        </div>

        <form class="sky-form" role="form" method="POST" action="{{ url('/register') }}">
            {!! csrf_field() !!}

            <!-- Name Field -->
            <label class="input has-error{{ $errors->has('name') ? ' state-error' : '' }} margin-bottom-20">
                <i class="icon-prepend fa fa-user"></i>
                <input type="text" name="name" placeholder="Name" value="{{ old('name') }}">

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </label>

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
            <label class="input has-error{{ $errors->has('password') ? ' state-error' : '' }} margin-bottom-20">
                <i class="icon-prepend fa fa-lock"></i>
                <input type="password" name="password" placeholder="Password">

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </label>

            <!-- Password Confirmation Field -->
            <label class="input has-error{{ $errors->has('password_confirmation') ? ' state-error' : '' }} margin-bottom-20">
                <i class="icon-prepend fa fa-lock"></i>
                <input type="password" name="password_confirmation" placeholder="Confirm Password">

                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </label>

            <hr>

            <!-- Remember me CheckBox -->
            <label class="checkbox">
                <input type="checkbox" name="terms"><i></i>I read <a target="_blank" href="page_terms.html"><span class="color-green">Terms and Conditions</span></a>
            </label>

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <button type="submit" class="btn-u btn-block">Register</button>
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
