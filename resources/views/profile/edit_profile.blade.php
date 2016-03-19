@extends('layout.default4')
@section('content')
<div id="loading">
    <div id="container" style="margin: 20% auto 0;width: 250px;">
        <img src="images/ajax-loader.gif" alt="" style="margin:0 117px;" />
    </div>
</div>
<div class="row s-al-main-content s-al-chapters">
    <div class="col-md-12 s-al-page-heading" style="background:url(images/timeline-pic.jpg)">
        <h2><i class="fa fa-female"></i> Khushi Randhawa <a class="pull-right member-count"> <input type="file" style="opacity:0; position:absolute;" />Upload Timeline Picture</a></h2>
    </div>
</div>
{!!
    		Form::open(array('url' =>route('save.profile', $user->user_id), 'method' => 'POST',
    		'class'=> 'omb_loginForm',
    		'autocomplete'=>'off'
    		))
			!!}
    <div class="col-md-12 s-al-profile s-al-list s-al-content">
        <div class="col-md-12">
            <div class=" n-al-detail-header">
                <div class="date-button">Personal Information
                </div>
            </div>
        </div>
        <div class="col-md-12 s-al-content-forum-box">
            <div class="s-al-profile-desc s-al-desc col-md-12">
                @include('common.message')
                <div class="form_group">
                    <div class="row formRow elVal">
                        <div class="col-md-4">
                            <label>First Name</label><br>
                            {{
  						Form::text('first_name', null,['required' => true])
						}}
                        </div>
                        <div class="col-md-4">
                            <label>Last Name</label><br>
                            {{
                         Form::text('last_name', null)
                       }}
                        </div>
                        <div class="col-md-4">
                            <label>Display Name</label><br>
                            {{
                         Form::text('display_name', $user->user_name)
                       }}
                        </div>
                    </div>

                    <div class="row formRow elVal">
                        <div class="col-md-4">
                            <label>Email ID</label><br>
                            {{
  						Form::text('email', $user->email)
						}}
                        </div>
                        <div class="col-md-4">
                            <label>Mobile</label><br>
                            {{
                         Form::text('mobile',$user->Phone)
                       }}
                        </div>
                        <div class="col-md-4">
                            <label>Marital Status</label><br>
                            {{
                         Form::text('marital_status', null)
                       }}
                        </div>
                    </div>

                    <div class="row formRow elVal">
                        <div class="col-md-4">
                            <label>D.O.B.</label><br>
                            {{
                         Form::text('date_of_birth', null)
                       }}
                        </div>
                        <div class="col-md-4">
                            <label>Hometown</label><br>
                            {{
                         Form::text('hometown', null)
                       }}
                        </div>
                        <div class="col-md-4">
                            <label>Current Location</label><br>
                            {{
                            Form::text('current_location', null)
                          }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 s-al-profile s-al-list s-al-content">
        <div class="col-md-12">
            <div class=" n-al-detail-header">
                <div class="date-button">College Information
                </div>
            </div>
        </div>
        <div class="col-md-12 s-al-content-forum-box">
            <div class="s-al-profile-desc s-al-desc col-md-12">
                <div class="form_group">
                    <div class="row formRow elVal">
                        <div class="col-md-4">
                            <label>College Name</label><br>
                            {{
  						Form::text('college_name', null)
						}}
                        </div>
                        <div class="col-md-4">
                            <label>Passing Year</label><br>
                            {{
                         Form::text('passing_year', null)
                       }}
                        </div>
                        <div class="col-md-4">
                            <label>Course</label><br>
                            {{
                         Form::text('course', null)
                       }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 s-al-profile s-al-list s-al-content">
        <div class="col-md-12">
            <div class=" n-al-detail-header">
                <div class="date-button">Employment Information
                </div>
            </div>
        </div>
        <div class="col-md-12 s-al-content-forum-box">
            <div class="s-al-profile-desc s-al-desc col-md-12">
                <div class="form_group">
                    <div class="row formRow elVal">
                        <div class="col-md-4">
                            <label>Current Employee</label><br>
                            {{
                         Form::text('current_employee', null)
                       }}
                        </div>
                        <div class="col-md-4">
                            <label>Working Since</label><br>
                            {{
                         Form::text('working_since', null)
                       }}
                        </div>
                        <div class="col-md-4">
                            <label>Designation</label><br>
                            {{
                         Form::text('designation', null)
                       }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 s-al-profile s-al-list s-al-content">
        <div class="col-md-12">
            <div class=" n-al-detail-header">
                <div class="date-button">Hobbies
                </div>
            </div>
        </div>
        <div class="col-md-12 s-al-content-forum-box">
            <div class="s-al-profile-desc s-al-desc col-md-12">
                <div class="form_group">
                    <div class="row formRow elVal">
                        <div class="col-md-4">
                            <label>Option 1</label><br>
                            {{
                         Form::text('option_1', null)
                       }}
                        </div>
                        <div class="col-md-4">
                            <label>Option 2</label><br>
                            {{
  						Form::text('option_2', null)
						}}
                        </div>
                        <div class="col-md-4">
                            <label>Option 3</label><br>
                            {{
                         Form::text('option_3', null)
                       }}
                        </div>
                    </div>
                    <div class="row formRow elVal">
                        {{
					 Form::submit('Submit',
					 ['class'=>'btn btn-success',
					 'type'=>'submit',
					 'value'=>'Save Profile',
					 'style'=>'margin-left:25px;margin-top:5px:'
					 ])
					 }}
                        <a class="btn btn-default" style="margin-left:15px;margin-top:15px;"> Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{!!
        			Form::close()
        			!!}
    @endsection