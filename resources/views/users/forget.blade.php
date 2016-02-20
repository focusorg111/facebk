@extends('layout.default')
@section('content')
<div class="page-title"><h1 class=" text-center">Recover Password</h1>
</div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="elegent-bx">
                <div class="floating-arrow"></div>
                <div class="row">
            <div class="col-md-12" id="login">
                <p>Please enter your registered email.</p><br>
                {{
            Form::open(array('url' => route('password.reset'), 'method' => 'POST'))
            }}

        
                    <fieldset class="clearfix">
        
                        <p id="first"><span class="fontawesome-user"></span>{{
                        Form::text('email', null,
                        ['class'=> 'form-control',
                        'placeholder'=>'Registered Email'])
                        }}</p> <!-- JS because of IE support; better: placeholder="Username" -->
                         <!-- JS because of IE support; better: placeholder="Password" -->
                         
                         
                        <p>
                         {{
                     Form::submit('Submit',
                     ['class'=>'btn btn-block btn-primary btn-large',
                     'type'=>'submit'
                     ])
                     }}
                    </p>
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
    @endsection