@extends('layouts.app')

@section('content')
<body class="login-cover1">
	<div class="page-container login-container">
    <div class="page-content">
      <div class="content-wrapper">
	       <div class="content">

           <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
               {{ csrf_field() }}
           <div class="panel panel-body login-form">
             <div class="text-center">
               <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
               <h5 class="content-group">Login to your account <small class="display-block">Your credentials</small></h5>
             </div>

               <div class="form-group has-feedback has-feedback-left{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="form-control" placeholder="Your email" name="email" value="{{ old('email') }}">
                @if ($errors->has('email'))
    								<span class="help-block">
    										<strong>{{ $errors->first('email') }}</strong>
    								</span>
    						@endif
               <div class="form-control-feedback">
                 <i class="icon-user text-muted"></i>
               </div>
             </div>

             <div class="form-group has-feedback has-feedback-left{{ $errors->has('password') ? ' has-error' : '' }}">
               <input id="password" type="password" placeholder="Password" class="form-control" name="password">

               @if ($errors->has('password'))
   								<span class="help-block">
   										<strong>{{ $errors->first('password') }}</strong>
   								</span>
   						@endif
               <div class="form-control-feedback">
                 <i class="icon-lock2 text-muted"></i>
               </div>
             </div>

             <div class="form-group login-options">
               <div class="row">
                 <div class="col-sm-6">
                   <label class="checkbox-inline">
                     <input type="checkbox" class="styled" checked="checked">
                     Remember
                   </label>
                 </div>

                 <div class="col-sm-6 text-right">
                   <a href="{{ url('/password/reset') }}">Forgot password?</a>
                 </div>
               </div>
             </div>

             <div class="form-group">
               <button type="submit" class="btn bg-blue btn-block">Login <i class="icon-arrow-right14 position-right"></i></button>
             </div>

             <div class="content-divider text-muted form-group"><span>or sign in with</span></div>
             <ul class="list-inline form-group list-inline-condensed text-center">
               <li><a href="#" class="btn border-indigo text-indigo btn-flat btn-icon btn-rounded"><i class="icon-facebook"></i></a></li>
               <li><a href="#" class="btn border-pink-300 text-pink-300 btn-flat btn-icon btn-rounded"><i class="icon-dribbble3"></i></a></li>
               <li><a href="#" class="btn border-slate-600 text-slate-600 btn-flat btn-icon btn-rounded"><i class="icon-github"></i></a></li>
               <li><a href="#" class="btn border-info text-info btn-flat btn-icon btn-rounded"><i class="icon-twitter"></i></a></li>
             </ul>

             <div class="content-divider text-muted form-group"><span>Don't have an account?</span></div>
             <a href="{{ url('/register') }}" class="btn btn-default btn-block content-group">Sign up</a>
             <span class="help-block text-center no-margin">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
           </div>
           </form>
           <!-- /form with validation -->
        </div>
      </div>
   </div>
</div>
@endsection
