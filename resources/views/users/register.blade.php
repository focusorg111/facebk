@extends('layout.default')
@section('content')
<div class="page-title"><h1 class=" text-center">Alumni Registration</h1>
</div>
	<div class="row">
    	<div class="col-md-8 col-md-offset-2">
			<div class="elegent-bx">
        	<div class="floating-arrow"></div>
                <div class="omb_login">
		<div class="row omb_row-sm-offset-3 omb_socialButtons">
    	    <div class="col-xs-4 col-sm-3">
		        <a href="#" class="btn btn-lg btn-block omb_btn-facebook">
			        <i class="fa fa-facebook visible-xs"></i>
			        <span class="hidden-xs"><i class="fa fa-facebook"></i> &nbsp;Facebook</span>
		        </a>
	        </div>
        	<div class="col-xs-4 col-sm-3">
		        <a href="#" class="btn btn-lg btn-block omb_btn-twitter">
			        <i class="fa fa-twitter visible-xs"></i>
			        <span class="hidden-xs"><i class="fa fa-linkedin"></i> &nbsp;LinkedIn</span>
		        </a>
	        </div>	
		</div>

		<div class="row omb_row-sm-offset-3 omb_loginOr">
			<div class="col-xs-12 col-sm-6">
				<hr class="omb_hrOr">
				<span class="omb_spanOr">or</span>
			</div>
		</div>
			@include('common.message')
		<div class="row omb_row-sm-offset-3">
			<div class="col-xs-12 col-sm-6">	
			{!!
    		Form::open(array('url' => 'users/registersuccess', 'method' => 'POST',
    		'class'=> 'omb_loginForm',
    		'autocomplete'=>'off'
    		))
			!!}

			
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						{{
  						Form::text('user_name', null,
  						['class'=> 'form-control',
  						'type'=>'text',
  						'placeholder'=>'Name'
  						])
  						}}
						</div>
					<span class="help-block"></span>
                    <div class="input-group">
						<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
						{{
  						Form::text('email', null,
  						['class'=> 'form-control',
  						'placeholder'=>'email address'
  						])
						}}
					</div>
					<span class="help-block"></span>
                    <div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock"></i></span>
						{{
  						Form::text('password', null,
  						['class'=> 'form-control',
  						'placeholder'=>'Password'
  						])
						}}
					</div>
					<span class="help-block"></span>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-phone"></i></span>
						{{
  						Form::text('Phone', null,
  						['class'=> 'form-control',
  						'placeholder'=>'Phone'
  						])
						}}
					</div>
                    <span class="help-block"></span>
                    {{
					 Form::submit('Signup',
					 ['class'=>'btn btn-lg btn-primary btn-block',
					 'type'=>'submit'
					 ])
					 }}
					

		{!!
        			Form::close()  
        			!!}
			</div>
    	</div>
        <div class="row omb_row-sm-offset-3">
            <div class="col-xs-12 col-sm-6">
				<p class="omb_forgotPwd">
					Already have an account? <a href="login">Login Here</a>
				</p>
			</div>
        </div>    	
	</div>
            </div>
        </div>
    </div>
    @endsection