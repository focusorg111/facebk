 @extends('layout.default')
@section('content')
<div class="page-title"><h1 class=" text-center">Alumni Login</h1>
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

		<div class="row omb_row-sm-offset-3">
			<div class="col-xs-12 col-sm-6">	
			{{
    		Form::open(array('url' => 'users/authenticate', 'method' => 'POST',
    		'class'=> 'omb_loginForm',
    		'action'=>'dashboard.html',
    		'autocomplete'=>'off'))
			}}
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						{{
  						Form::text('email', null,
  						['class'=> 'form-control',
  						'type'=>'text',
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
                    <span class="help-block">Password error</span>
                    {{
					 Form::submit('Login',
					 ['class'=>'btn btn-lg btn-primary btn-block',
					 'type'=>'submit'
					 ])
					 }}
					 
					{{
        			Form::close()  
        			}}
			</div>
    	</div>
		<div class="row omb_row-sm-offset-3">
			<div class="col-xs-12 col-sm-3">
				&nbsp;
			</div>
			<div class="col-xs-12 col-sm-3">
				<p class="omb_forgotPwd">
					<a href="forget">Forgot password?</a>
				</p>
			</div>
		</div>	
        <div class="row omb_row-sm-offset-3">
            <div class="col-xs-12 col-sm-6">
				<p class="omb_forgotPwd">
					Dont have an account? <a href="register">Click here to Create one</a>
				</p>
			</div>
        </div>    	
	</div>
            </div>
        </div>
    </div>
    @endsection