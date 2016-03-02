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
<form>
    <div class="col-md-12 s-al-profile s-al-list s-al-content">
        <div class="col-md-12">
            <div class=" n-al-detail-header">
                <div class="date-button">Personal Information
                </div>
            </div>
        </div>
        <div class="col-md-12 s-al-content-forum-box">
            <div class="s-al-profile-desc s-al-desc col-md-12">
                <div class="form_group">
                    <div class="row formRow elVal">
                        <div class="col-md-4">
                            <label>First Name</label><br>
                            <input type="text" />
                        </div>
                        <div class="col-md-4">
                            <label>Last Name</label><br>
                            <input type="text" />
                        </div>
                        <div class="col-md-4">
                            <label>Display Name</label><br>
                            <input type="text" />
                        </div>
                    </div>

                    <div class="row formRow elVal">
                        <div class="col-md-4">
                            <label>Email ID</label><br>
                            <input type="text" />
                        </div>
                        <div class="col-md-4">
                            <label>Mobile</label><br>
                            <input type="text" />
                        </div>
                        <div class="col-md-4">
                            <label>Marital Status</label><br>
                            <input type="text" />
                        </div>
                    </div>

                    <div class="row formRow elVal">
                        <div class="col-md-4">
                            <label>D.O.B.</label><br>
                            <input type="text" />
                        </div>
                        <div class="col-md-4">
                            <label>Hometown</label><br>
                            <input type="text" />
                        </div>
                        <div class="col-md-4">
                            <label>Current Location</label><br>
                            <input type="text" />
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
                            <input type="text" />
                        </div>
                        <div class="col-md-4">
                            <label>Passing Year</label><br>
                            <input type="text" />
                        </div>
                        <div class="col-md-4">
                            <label>Course</label><br>
                            <input type="text" />
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
                            <input type="text" />
                        </div>
                        <div class="col-md-4">
                            <label>Working Since</label><br>
                            <input type="text" />
                        </div>
                        <div class="col-md-4">
                            <label>Designation</label><br>
                            <input type="text" />
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
                            <input type="text" />
                        </div>
                        <div class="col-md-4">
                            <label>Option 2</label><br>
                            <input type="text" />
                        </div>
                        <div class="col-md-4">
                            <label>Option 3</label><br>
                            <input type="text" />
                        </div>
                    </div>
                    <div class="row formRow elVal">
                        <input type="submit" class="btn btn-success" style="margin-left:15px;margin-top:15px;" value="Save Profile" />
                        <a class="btn btn-default" style="margin-left:15px;margin-top:15px;"> Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
    @endsection