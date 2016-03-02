@extends('layout.default')
@section('content')
    <div class="container"><div class="page-title"><h1 class=" text-center"	>Create Password</h1></div></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="elegent-bx">
                    <div class="floating-arrow"></div>
                    @include('common.message')
                    <div class="row">

                        <div id="login" class="col-md-12">

                            <p><i class="fa fa-lock"></i> Change Password.</p><br>

                            {!!
             Form::open(array('url' => route('change.password'), 'method' => 'POST',
             'class'=> 'omb_loginForm',
             'autocomplete'=>'off'
             ))
             !!}

                                <fieldset class="clearfix">
                                    <p id="first"><span class="fontawesome-user"></span>{{
  						Form::password('old_password', null,
  						['class'=> 'form-control',
  						'placeholder'=>'Old Password'
  						])
						}}</p>

                                    <p id="first"><span class="fontawesome-user"></span>{{
  						Form::password('new_password', null,
  						['class'=> 'form-control',
  						'placeholder'=>'New Password'
  						])
						}}</p> <!-- JS because of IE support; better: placeholder="Username" -->
                                    <!-- JS because of IE support; better: placeholder="Password" -->
                                    <p id="first"><span class="fontawesome-user"></span>
                                        {{
  						Form::password('confirm_password', null,
  						['class'=> 'form-control',
  						'placeholder'=>'Confirm Password'
  						])
						}}</p>


                                    <p>
                                        {{
                    Form::submit('Change Password',
                    ['class'=>'btn btn-block btn-primary btn-small',
                    'value'=>'Get Involved'
                    ])
                    }}</p>
                                    <!--<button id="shake">Shake It</button>-->
                                </fieldset>

                            {{
        			Form::close()
        			}}

                        </div> <!-- end login -->


                    </div>
                </div>
            </div>
        </div>
    </div>
        @endsection