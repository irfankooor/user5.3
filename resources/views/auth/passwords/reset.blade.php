@extends('layouts.app')
@section('content')

<div class="page-container login-container">
  <div class="page-content">
    <div class="content-wrapper">
      <div class="content">

        <!-- Simple login form -->
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
            {{ csrf_field() }}

            <input type="hidden" name="token" value="{{ $token }}">

          <div class="panel panel-body login-form">
            <div class="text-center">
              <div class="icon-object border-warning-400 text-warning-400"><i class="icon-bubble-lines3"></i></div>
              <h5 class="content-group">Reset Password<small class="display-block">confirmated for new your password</small></h5>
            </div>

            <div class="form-group has-feedback has-feedback-left{{ $errors->has('email') ? ' has-error' : '' }}">
              <input id="email" type="email" placeholder="E-Mail Address" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>
              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
              <div class="form-control-feedback">
                <i class="icon-mention text-muted"></i>
              </div>
            </div>

            <div class="form-group has-feedback has-feedback-left{{ $errors->has('password') ? ' has-error' : '' }}">
              <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>

              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
              <div class="form-control-feedback">
                <i class="icon-lock2 text-muted"></i>
              </div>
            </div>


            <div class="form-group has-feedback has-feedback-left{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
              <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required>

              @if ($errors->has('password_confirmation'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password_confirmation') }}</strong>
                  </span>
              @endif
              <div class="form-control-feedback">
                <i class="icon-lock2 text-muted"></i>
              </div>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 position-right"></i></button>
            </div>

        </form>
        <!-- /simple login form -->
      </div>
    </div>
  </div>
</div>
@endsection
