@extends('layout.default1')
@section('content')
<div id="loading">
        <div id="container" style="margin: 20% auto 0;width: 250px;">
            <img src="{{ asset('assets/images/ajax-loader.gif') }}" alt="" style="margin:0 117px;" />
        </div>
    </div>
    <div class="col-md-12">
        <div class="row s-al-main-content">
        	<div class="row">
            <div class="col-md-12 s-al-page-heading">
                <div class="row">
                    <div class="col-md-5"><h1>Dashboard</h1></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="alert alert-info" role="alert"><a id="admin-rights">Take a tour to the Alumni</a></div>
        </div>
            <div class="row">
            	<div class="col-md-6">
                    <div class="quick-look-box messages">
                        <div class="heading"><i class="fa fa-comments"></i> Messages <span id="TourElement4" class="pull-right btn-round">2 New</span></div>
                        <div class="widget people-dash">
        	
            <div class="widget-contant">
            	<ul class="list-unstyled">
                        <li class="row s-al-activity-list">
                            <div class="" style="margin:0 10px; width:98%;">	
                            	<img src='<?php asset("assets/img/user_img/2.jpg") ?>' width="40" style="float:left; margin-right:10px;" alt="" />
                                <div class="s-al-activity-title">
                                    <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                    <span>4 hours ago.</span><br>
                                    <span><strong>Where are you now ?</strong></span>
                                </div>
                                <div class="s-al-activity-content"></div>
                                <div class="s-al-activity-meta">
                                    <a href="#"><i class="fa fa-comment"></i> Reply</a>
                                </div>
                            </div>
                        </li>
                        <li class="row s-al-activity-list">
                            <div class="" style="margin:0 10px; width:98%;">	
                            	<img src="{{asset('assets/img/user_img/2.jpg') }}" width="40" style="float:left; margin-right:10px;" alt="" />
                                <div class="s-al-activity-title">
                                    <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                    <span>4 hours ago.</span><br>
                                    <span><strong>Where are you now ?</strong></span>
                                </div>
                                <div class="s-al-activity-content"></div>
                                <div class="s-al-activity-meta">
                                    <a href="#"><i class="fa fa-comment"></i> Reply</a>
                                </div>
                            </div>
                        </li>
                        <li class="row s-al-activity-list">
                            <div class="" style="margin:0 10px; width:98%;">	
                            	<img src="{{ asset('assets/img/user_img/3.jpg') }}" width="40" style="float:left; margin-right:10px;" alt="" />
                                <div class="s-al-activity-title">
                                    <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                    <span>4 hours ago.</span><br>
                                    <span><strong>Yes i view that link it is about...</strong></span>
                                </div>
                                <div class="s-al-activity-content"></div>
                                <div class="s-al-activity-meta">
                                    <a href="#"><i class="fa fa-comment"></i> Reply</a>
                                </div>
                            </div>
                        </li>
                    </ul>
            </div>
        </div>
        <div class="ql-actions text-right">
                        	<a href="#" class="btn btn-success btn-sm">View All</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="quick-look-box gallery">
                        <div class="heading"><i class="fa fa-picture-o"></i> Gallery <span class="pull-right btn-round">3 New</span></div>
                        <div class="ql-box-content">
                        	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="{{ asset('assets/img/gallery-img/large/2.jpg') }}" alt="...">
    </div>
    <div class="item">
      <img src="{{ asset('assets/img/gallery-img/large/1.jpg') }}" alt="...">
    </div>
    <div class="item">
      <img src="{{ asset('assets/img/gallery-img/large/3.jpg') }}" alt="...">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
                        </div>
                        <div class="ql-actions text-right">
                        	<a href="gallery.html" class="btn btn-success btn-sm">View All</a>
                        </div>
                    </div>
                </div>
            </div>
        	<div class="row">
            	<div class="col-md-6">
                    <div class="quick-look-box news">
                        <div class="heading"><i class="fa fa-book"></i> News <span class="pull-right btn-round">12 New</span></div>
                        <div class="ql-box-content">
                        	<ul class="list-unstyled">	
                            	<li>
                                	<h3>AVG The Best Internet Security 2014 for... </h3>
                            		<p>Full Version Softwares and Games AVG The Best Internet Security 2014 for you Serial Keygen</p>
                                </li>
                                <li>
                                	<h3>Best Internet Security 2014 for... </h3>
                            		<p>Full Version Softwares and Games AVG The Best Internet Security 2014 for you Keygen</p>                                </li>
                                <li>
                                	<h3>AVG The Best Internet Security 2014 for... </h3>
                            		<p>Full Version Softwares and Games AVG The Best Internet Security 2014 for you Serial Keygen</p>
                                </li>
                            </ul>
                        </div>
                        <div class="ql-actions text-right">
                        	<a href="news.html" class="btn btn-success btn-sm">View All</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="quick-look-box events">
                        <div class="heading"> <i class="fa fa-calendar"></i> Upcoming Events <span class="pull-right btn-round">3 New</span></div>
                        <div class="ql-box-content">
                        	<ul class="list-unstyled">	
                            	<li>
                                	<h3>AVG The Best Internet Security 2014 for... </h3>
                            		<p>Full Version Softwares and Games AVG The Best Internet Security 2014 for you Serial Keygen</p>
                                </li>
                                <li>
                                	<h3>Best Internet Security 2014 for... </h3>
                            		<p>Full Version Softwares and Games AVG The Best Internet Security 2014 for you Keygen</p>                                </li>
                                <li>
                                	<h3>AVG The Best Internet Security 2014 for... </h3>
                            		<p>Full Version Softwares and Games AVG The Best Internet Security 2014 for you Serial Keygen</p>
                                </li>
                            </ul>
                        </div>
                        <div class="ql-actions text-right">
                        	<a href="events.html" class="btn btn-success btn-sm">View All</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            	<div class="col-md-6">
                    <div class="quick-look-box notice">
                        <div class="heading"><i class="fa fa-adjust"></i> Notice Board <span class="pull-right btn-round">2 New</span></div>
                        <div class="ql-box-content">
                        	<ul class="list-unstyled">	
                            	<li>
                                	<h3>AVG The Best Internet Security 2014 for... </h3>
                            		<p>Full Version Softwares and Games AVG The Best Internet Security 2014 for you Serial Keygen</p>
                                </li>
                                <li>
                                	<h3>Best Internet Security 2014 for... </h3>
                            		<p>Full Version Softwares and Games AVG The Best Internet Security 2014 for you Keygen</p>                                </li>
                                <li>
                                	<h3>AVG The Best Internet Security 2014 for... </h3>
                            		<p>Full Version Softwares and Games AVG The Best Internet Security 2014 for you Serial Keygen</p>
                                </li>
                            </ul>
                        </div>
                        <div class="ql-actions text-right">
                        	<a href="notice-board.html" class="btn btn-success btn-sm">View All</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="quick-look-box polls">
                        <div class="heading"><i class="fa fa-signal"></i> Polls <span class="pull-right btn-round">19 New</span></div>
                        <div class="ql-box-content">
                                	<h3>AVG The Best Internet Security 2014 for... </h3>
                        	<ul class="list-unstyled">	
                            	<li>
                            		<p><input type="radio" /> &nbsp;Full Version Softwares and Games AVG The Best Internet Security 2014 for you Serial Keygen</p>
                                </li>
                                <li>
                            		<p><input type="radio" /> &nbsp;Full Version Softwares and Games AVG The Best Internet Security 2014 for you Serial Keygen</p>
                                </li>
                                <li>
                            		<p><input type="radio" /> &nbsp;Full Version Softwares and Games AVG The Best Internet Security 2014 for you Serial Keygen</p>
                                </li>
                                <li style="margin-top:10px;">
                            		<a class="btn btn-default btn-sm" href="polls.html">Show all Results</a> &nbsp; &nbsp; &nbsp;
                                    <a class="btn btn-primary btn-sm">Submit Answer</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ql-actions text-right">
                        	<a href="polls.html" class="btn btn-success btn-sm">View All</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="col-md-12 s-al-activity-feed">
                <div id="mySliderTabs">
                      <ul class="col-md-8 col-md-offset-2 text-center">
                        <li><a href="#all">All</a></li>
                        <li><a href="#messages">Messages</a></li>
                        <li><a href="#forums">Forums</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#polls">Polls</a></li>
                      </ul>
              <div id="all">
                <div class="row">
                <div class="content-padding col-md-12">
                    <ul class="list-unstyled">
                        <li class="row s-al-activity-list">
                            <div class="col-md-2">
                                <img src="assets/img/user_img/1.jpg" class="img-responsive" alt="" />
                            </div>
                            <div class="col-md-8">
                                <div class="s-al-activity-title">
                                    <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                    <span>enrolled</span>
                                    <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                    <span>in Imperial College London</span>
                                </div>
                                <div class="s-al-activity-content"></div>
                                <div class="s-al-activity-meta">
                                    <a href="#">Like</a>
                                    <a href="#">Comment</a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="s-al-activity-time-posted">2 Days ago</div>
                                <div class="s-al-activity-action">
                                    <a href="#"><i class="fa fa-heart-o"></i> &nbsp; 2</a>
                                    <a href="#"><i class="fa fa-comment-o"></i> &nbsp; 2</a>
                                </div>
                            </div>
                        </li>
                        <li class="row s-al-activity-list">
                            <div class="col-md-2">
                                <img src="assets/img/user_img/1.jpg" class="img-responsive" alt="" />
                            </div>
                            <div class="col-md-8">
                                <div class="s-al-activity-title">
                                    <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                    <span>enrolled</span>
                                    <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                    <span>in Imperial College London</span>
                                </div>
                                <div class="s-al-activity-content"></div>
                                <div class="s-al-activity-meta">
                                    <a href="#">Like</a>
                                    <a href="#">Comment</a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="s-al-activity-time-posted">2 Days ago</div>
                                <div class="s-al-activity-action">
                                    <a href="#"><i class="fa fa-heart-o"></i> &nbsp; 2</a>
                                    <a href="#"><i class="fa fa-comment-o"></i> &nbsp; 2</a>
                                </div>
                            </div>
                        </li>
                        <li class="row s-al-activity-list">
                            <div class="col-md-2">
                                <img src="assets/img/user_img/1.jpg" class="img-responsive" alt="" />
                            </div>
                            <div class="col-md-8">
                                <div class="s-al-activity-title">
                                    <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                    <span>enrolled</span>
                                    <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                    <span>in Imperial College London</span>
                                </div>
                                <div class="s-al-activity-content"></div>
                                <div class="s-al-activity-meta">
                                    <a href="#">Like</a>
                                    <a href="#">Comment</a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="s-al-activity-time-posted">2 Days ago</div>
                                <div class="s-al-activity-action">
                                    <a href="#"><i class="fa fa-heart-o"></i> &nbsp; 2</a>
                                    <a href="#"><i class="fa fa-comment-o"></i> &nbsp; 2</a>
                                </div>
                            </div>
                        </li>
                        <li class="row s-al-activity-list">
                            <div class="col-md-2">
                                <img src="assets/img/user_img/1.jpg" class="img-responsive" alt="" />
                            </div>
                            <div class="col-md-8">
                                <div class="s-al-activity-title">
                                    <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                    <span>enrolled</span>
                                    <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                    <span>in Imperial College London</span>
                                </div>
                                <div class="s-al-activity-content"></div>
                                <div class="s-al-activity-meta">
                                    <a href="#">Like</a>
                                    <a href="#">Comment</a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="s-al-activity-time-posted">2 Days ago</div>
                                <div class="s-al-activity-action">
                                    <a href="#"><i class="fa fa-heart-o"></i> &nbsp; 2</a>
                                    <a href="#"><i class="fa fa-comment-o"></i> &nbsp; 2</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
              <div id="forums">
                <div class="row">
                <div class="content-padding col-md-12">
                    <ul class="list-unstyled">
                        <li class="row s-al-activity-list">
                            <div class="col-md-2">
                                <img src="assets/img/user_img/1.jpg" class="img-responsive" alt="" />
                            </div>
                            <div class="col-md-8">
                                <div class="s-al-activity-title">
                                    <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                    <span>enrolled</span>
                                    <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                    <span>in Imperial College London</span>
                                </div>
                                <div class="s-al-activity-content"></div>
                                <div class="s-al-activity-meta">
                                    <a href="#">Like</a>
                                    <a href="#">Comment</a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="s-al-activity-time-posted">2 Days ago</div>
                                <div class="s-al-activity-action">
                                    <a href="#"><i class="fa fa-heart-o"></i> &nbsp; 2</a>
                                    <a href="#"><i class="fa fa-comment-o"></i> &nbsp; 2</a>
                                </div>
                            </div>
                        </li>
                        <li class="row s-al-activity-list">
                            <div class="col-md-2">
                                <img src="assets/img/user_img/1.jpg" class="img-responsive" alt="" />
                            </div>
                            <div class="col-md-8">
                                <div class="s-al-activity-title">
                                    <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                    <span>enrolled</span>
                                    <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                    <span>in Imperial College London</span>
                                </div>
                                <div class="s-al-activity-content"></div>
                                <div class="s-al-activity-meta">
                                    <a href="#">Like</a>
                                    <a href="#">Comment</a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="s-al-activity-time-posted">2 Days ago</div>
                                <div class="s-al-activity-action">
                                    <a href="#"><i class="fa fa-heart-o"></i> &nbsp; 2</a>
                                    <a href="#"><i class="fa fa-comment-o"></i> &nbsp; 2</a>
                                </div>
                            </div>
                        </li>
                        <li class="row s-al-activity-list">
                            <div class="col-md-2">
                                <img src="assets/img/user_img/1.jpg" class="img-responsive" alt="" />
                            </div>
                            <div class="col-md-8">
                                <div class="s-al-activity-title">
                                    <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                    <span>enrolled</span>
                                    <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                    <span>in Imperial College London</span>
                                </div>
                                <div class="s-al-activity-content"></div>
                                <div class="s-al-activity-meta">
                                    <a href="#">Like</a>
                                    <a href="#">Comment</a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="s-al-activity-time-posted">2 Days ago</div>
                                <div class="s-al-activity-action">
                                    <a href="#"><i class="fa fa-heart-o"></i> &nbsp; 2</a>
                                    <a href="#"><i class="fa fa-comment-o"></i> &nbsp; 2</a>
                                </div>
                            </div>
                        </li>
                        <li class="row s-al-activity-list">
                            <div class="col-md-2">
                                <img src="assets/img/user_img/1.jpg" class="img-responsive" alt="" />
                            </div>
                            <div class="col-md-8">
                                <div class="s-al-activity-title">
                                    <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                    <span>enrolled</span>
                                    <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                    <span>in Imperial College London</span>
                                </div>
                                <div class="s-al-activity-content"></div>
                                <div class="s-al-activity-meta">
                                    <a href="#">Like</a>
                                    <a href="#">Comment</a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="s-al-activity-time-posted">2 Days ago</div>
                                <div class="s-al-activity-action">
                                    <a href="#"><i class="fa fa-heart-o"></i> &nbsp; 2</a>
                                    <a href="#"><i class="fa fa-comment-o"></i> &nbsp; 2</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
                </div>
                <div id="gallery">
                <div class="row">
                <div class="content-padding col-md-12">
                    <ul class="list-unstyled">
                        <li class="row s-al-activity-list">
                            <div class="col-md-2">
                                <img src="assets/img/user_img/1.jpg" class="img-responsive" alt="" />
                            </div>
                            <div class="col-md-8">
                                <div class="s-al-activity-title">
                                    <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                    <span>enrolled</span>
                                    <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                    <span>in Imperial College London</span>
                                </div>
                                <div class="s-al-activity-content"></div>
                                <div class="s-al-activity-meta">
                                    <a href="#">Like</a>
                                    <a href="#">Comment</a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="s-al-activity-time-posted">2 Days ago</div>
                                <div class="s-al-activity-action">
                                    <a href="#"><i class="fa fa-heart-o"></i> &nbsp; 2</a>
                                    <a href="#"><i class="fa fa-comment-o"></i> &nbsp; 2</a>
                                </div>
                            </div>
                        </li>
                        <li class="row s-al-activity-list">
                            <div class="col-md-2">
                                <img src="assets/img/user_img/1.jpg" class="img-responsive" alt="" />
                            </div>
                            <div class="col-md-8">
                                <div class="s-al-activity-title">
                                    <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                    <span>enrolled</span>
                                    <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                    <span>in Imperial College London</span>
                                </div>
                                <div class="s-al-activity-content"></div>
                                <div class="s-al-activity-meta">
                                    <a href="#">Like</a>
                                    <a href="#">Comment</a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="s-al-activity-time-posted">2 Days ago</div>
                                <div class="s-al-activity-action">
                                    <a href="#"><i class="fa fa-heart-o"></i> &nbsp; 2</a>
                                    <a href="#"><i class="fa fa-comment-o"></i> &nbsp; 2</a>
                                </div>
                            </div>
                        </li>
                        <li class="row s-al-activity-list">
                            <div class="col-md-2">
                                <img src="assets/img/user_img/1.jpg" class="img-responsive" alt="" />
                            </div>
                            <div class="col-md-8">
                                <div class="s-al-activity-title">
                                    <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                    <span>enrolled</span>
                                    <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                    <span>in Imperial College London</span>
                                </div>
                                <div class="s-al-activity-content"></div>
                                <div class="s-al-activity-meta">
                                    <a href="#">Like</a>
                                    <a href="#">Comment</a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="s-al-activity-time-posted">2 Days ago</div>
                                <div class="s-al-activity-action">
                                    <a href="#"><i class="fa fa-heart-o"></i> &nbsp; 2</a>
                                    <a href="#"><i class="fa fa-comment-o"></i> &nbsp; 2</a>
                                </div>
                            </div>
                        </li>
                        <li class="row s-al-activity-list">
                            <div class="col-md-2">
                                <img src="assets/img/user_img/1.jpg" class="img-responsive" alt="" />
                            </div>
                            <div class="col-md-8">
                                <div class="s-al-activity-title">
                                    <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                    <span>enrolled</span>
                                    <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                    <span>in Imperial College London</span>
                                </div>
                                <div class="s-al-activity-content"></div>
                                <div class="s-al-activity-meta">
                                    <a href="#">Like</a>
                                    <a href="#">Comment</a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="s-al-activity-time-posted">2 Days ago</div>
                                <div class="s-al-activity-action">
                                    <a href="#"><i class="fa fa-heart-o"></i> &nbsp; 2</a>
                                    <a href="#"><i class="fa fa-comment-o"></i> &nbsp; 2</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
                </div>
                <div id="polls">
                <div class="row">
                <div class="content-padding col-md-12">
                    <ul class="list-unstyled">
                        <li class="row s-al-activity-list">
                            <div class="col-md-2">
                                <img src="assets/img/user_img/1.jpg" class="img-responsive" alt="" />
                            </div>
                            <div class="col-md-8">
                                <div class="s-al-activity-title">
                                    <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                    <span>enrolled</span>
                                    <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                    <span>in Imperial College London</span>
                                </div>
                                <div class="s-al-activity-content"></div>
                                <div class="s-al-activity-meta">
                                    <a href="#">Like</a>
                                    <a href="#">Comment</a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="s-al-activity-time-posted">2 Days ago</div>
                                <div class="s-al-activity-action">
                                    <a href="#"><i class="fa fa-heart-o"></i> &nbsp; 2</a>
                                    <a href="#"><i class="fa fa-comment-o"></i> &nbsp; 2</a>
                                </div>
                            </div>
                        </li>
                        <li class="row s-al-activity-list">
                            <div class="col-md-2">
                                <img src="assets/img/user_img/1.jpg" class="img-responsive" alt="" />
                            </div>
                            <div class="col-md-8">
                                <div class="s-al-activity-title">
                                    <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                    <span>enrolled</span>
                                    <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                    <span>in Imperial College London</span>
                                </div>
                                <div class="s-al-activity-content"></div>
                                <div class="s-al-activity-meta">
                                    <a href="#">Like</a>
                                    <a href="#">Comment</a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="s-al-activity-time-posted">2 Days ago</div>
                                <div class="s-al-activity-action">
                                    <a href="#"><i class="fa fa-heart-o"></i> &nbsp; 2</a>
                                    <a href="#"><i class="fa fa-comment-o"></i> &nbsp; 2</a>
                                </div>
                            </div>
                        </li>
                        <li class="row s-al-activity-list">
                            <div class="col-md-2">
                                <img src="assets/img/user_img/1.jpg" class="img-responsive" alt="" />
                            </div>
                            <div class="col-md-8">
                                <div class="s-al-activity-title">
                                    <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                    <span>enrolled</span>
                                    <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                    <span>in Imperial College London</span>
                                </div>
                                <div class="s-al-activity-content"></div>
                                <div class="s-al-activity-meta">
                                    <a href="#">Like</a>
                                    <a href="#">Comment</a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="s-al-activity-time-posted">2 Days ago</div>
                                <div class="s-al-activity-action">
                                    <a href="#"><i class="fa fa-heart-o"></i> &nbsp; 2</a>
                                    <a href="#"><i class="fa fa-comment-o"></i> &nbsp; 2</a>
                                </div>
                            </div>
                        </li>
                        <li class="row s-al-activity-list">
                            <div class="col-md-2">
                                <img src="assets/img/user_img/1.jpg" class="img-responsive" alt="" />
                            </div>
                            <div class="col-md-8">
                                <div class="s-al-activity-title">
                                    <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                    <span>enrolled</span>
                                    <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                    <span>in Imperial College London</span>
                                </div>
                                <div class="s-al-activity-content"></div>
                                <div class="s-al-activity-meta">
                                    <a href="#">Like</a>
                                    <a href="#">Comment</a>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="s-al-activity-time-posted">2 Days ago</div>
                                <div class="s-al-activity-action">
                                    <a href="#"><i class="fa fa-heart-o"></i> &nbsp; 2</a>
                                    <a href="#"><i class="fa fa-comment-o"></i> &nbsp; 2</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
                </div>
            </div>
            </div>-->
            <!--<div class="col-md-6 col-md-offset-3">
                <ul class="pagination pagination-sm">
                    <li><a href="#" class="page">Previous</a></li>
                    <li><a href="#" class="page">1</a></li>
                    <li><a href="#" class="page">2</a>	</li>
                    <li><span class="page active">3</span>	</li>			
                    <li><a href="#" class="page">4</a></li>
                    <li><a href="#" class="page">5</a></li>
                    <li><a href="#"	class="page">Next</a></li>
                </ul>
            </div>-->
            
        </div>
    </div>
    @endsection