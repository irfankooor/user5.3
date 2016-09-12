@extends('layouts.app')

@section('content')
<body class="register-cover">
  <div class="page-container login-container">
    <div class="page-content">
      <div class="content-wrapper">
        <div class="content">

          <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
              {{ csrf_field() }}
            <div class="panel panel-body login-form{{ $errors->has('name') ? ' has-error' : '' }}">
              <div class="text-center">
                <div class="icon-object border-success text-success"><i class="icon-plus3"></i></div>
                <h5 class="content-group">Create account <small class="display-block">All fields are required</small></h5>
              </div>

              <div class="content-divider text-muted form-group"><span>Your credentials</span></div>

              <div class="form-group has-feedback has-feedback-left">
                <input id="name" type="text" placeholder="User name"class="form-control" name="name" value="{{ old('name') }}">

    						@if ($errors->has('name'))
    								<span class="help-block">
    										<strong>{{ $errors->first('name') }}</strong>
    								</span>
    						@endif
                <div class="form-control-feedback">
                  <i class="icon-user-check text-muted"></i>
                </div>
              </div>

              <div class="content-divider text-muted form-group"><span>Your privacy</span></div>

              <div class="form-group has-feedback has-feedback-left{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" placeholder="Your email" class="form-control" name="email" value="{{ old('email') }}">

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
                <input id="password" type="password" placeholder="Create password" class="form-control" name="password">

    						@if ($errors->has('password'))
    								<span class="help-block">
    										<strong>{{ $errors->first('password') }}</strong>
    								</span>
    						@endif
                <div class="form-control-feedback">
                  <i class="icon-user-lock text-muted"></i>
                </div>
              </div>

              <div class="form-group has-feedback has-feedback-left{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <input id="password-confirm" type="password" placeholder="Confirmation password" class="form-control" name="password_confirmation">

    						@if ($errors->has('password_confirmation'))
    								<span class="help-block">
    										<strong>{{ $errors->first('password_confirmation') }}</strong>
    								</span>
    						@endif                <div class="form-control-feedback">
                  <i class="icon-user-lock text-muted"></i>
                </div>
              </div>

              <div class="content-divider text-muted form-group"><span>Additions</span></div>

              <div class="form-group">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" class="styled" checked="checked">
                    Send me <a href="#">test account settings</a>
                  </label>
                </div>

                <div class="checkbox">
                  <label>
                    <input type="checkbox" class="styled" checked="checked">
                    Subscribe to monthly newsletter
                  </label>
                </div>

                <div class="checkbox">
                  <label>
                    <input type="checkbox" class="styled">
                    Accept <a href="#">terms of service</a>
                  </label>
                </div>
              </div>

              <button type="submit" class="btn bg-teal btn-block btn-lg">Register <i class="icon-circle-right2 position-right"></i></button>
            </div>
          </form>
          <!-- /advanced login -->
        </div>
      </div>
    </div>
</div>
@endsection
