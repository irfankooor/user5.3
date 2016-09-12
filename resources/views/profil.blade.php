@extends('layouts.app')
@section('content')
<div class="page-container login-container">
  		<div class="page-content">
  			<div class="content-wrapper">
  				<div class="content">
  						<div class="panel login-form">

                <div class="thumb thumb-rounded">
  								<img src="{{asset('LTR/assets/images/poto.jpg')}}" alt="">
  								<div class="caption-overflow">
  									<span>
  										<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded btn-xs"><i class="icon-collaboration"></i></a>
  										<a href="#" class="btn border-white text-white btn-flat btn-icon btn-rounded btn-xs ml-5"><i class="icon-question7"></i></a>
  									</span>
  								</div>
  							</div>

  							<div class="panel-body">
                  @if (Auth::guest())
                      <li><a href="{{ url('/login') }}">Login</a></li>
                      <li><a href="{{ url('/register') }}">Register</a></li>
                  @else
  								<h6 class="content-group text-center text-semibold no-margin-top"><small class="display-block">{{ Auth::user()->name }}</small></h6>
                  <center>{{ Auth::user()->email }}
                  @endif
  							</div>
  						</div>
  					</form>
  					<!-- /unlock user -->
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
