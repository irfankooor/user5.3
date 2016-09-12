@extends('layouts.app')
@section('content')

<div class="page-container login-container">
   <div class="page-content">
  		<div class="content-wrapper">
  			<div class="content">

  					<!-- Unlock user -->

            {!! Form::model($user, [
                'method' => 'PATCH',
                'action' => ['UserController@update', $user->id],
            ]) !!}
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
  								<h6 class="content-group text-center text-semibold no-margin-top">{{$user->name}}<small class="display-block">Edit your account</small></h6>

                  <div class="form-group has-feedback has-feedback-left">
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    <div class="form-control-feedback">
                      <i class="icon-user-check text-muted"></i>
                    </div>
                  </div>

                  <div class="form-group has-feedback has-feedback-left">
                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    <div class="form-control-feedback">
                      <i class="icon-mention text-muted"></i>
                    </div>
                  </div>

  								<button type="submit" class="btn btn-primary btn-block">Update <i class="icon-arrow-right14 position-right"></i></button>
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
