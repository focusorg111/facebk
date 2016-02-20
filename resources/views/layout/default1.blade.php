<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard | PTU Alumni</title>
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.sliderTabs1.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chapters.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/blue-theme.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/tinytools.tourtip.css') }}">
<style type="text/css">
		#s-al-gal-Container .mix{
			display: none;
		}
	</style>
</head>
<body class="dashboard">
<header>
	<div class="container-fluid">
    	<div class="row">
        	<div class="col-sm-12">
            	<div class="row s-al-header-bar">
                	<div class="col-sm-2 s-al-header-logo"><img src="assets/images/logo.png" class="img-responsive"  alt=""/> </div>
                    <div class="col-sm-7 s-al-header-center-bar">
                    	<div class="row">
                    		<div class="col-sm-2 s-al-header-notify-icon">
                            	<div class="row">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-sm-3 s-al-header-logout" id="TourElement5">
                        <div class="dropdown pull-right">
                            <a class="s-al-logout pull-right dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" href="user-logout.html">Khushi Randhawa <i class="fa fa-chevron-down"></i></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                        	<li role="presentation"><a role="menuitem" tabindex="-1" href="profile.html">Edit Profile</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Settings</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Change Password</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="user-logout.html">Logout</a></li>
                          </ul>
                      </div>
                      <div class="dropdown pull-right">
                    	<a href="#" class="pull-right comments dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown"><i class="fa fa-users"></i><span class="not-count">2</span>
                                

                                </a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                            <li role="presentation"><a>No new request</a></li>
                          </ul>
                                </div>
                                
                          <div class="dropdown pull-right">
                                <a href="#" class="pull-right comments dropdown-toggle" id="dropdownMenu4" data-toggle="dropdown"><i class="fa fa-comments"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                            <li role="presentation"><a>No new message</a></li>
                          </ul>
                                </div>
                                
                                <div class="dropdown pull-right"><a href="#" class="pull-right notification  dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown"><i class="fa fa-bell"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                            <li role="presentation"><a>No new notification</a></li>
                          </ul>
                                </div>
                                
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container-fluid s-al-container">
 <div class="row">
  <section class="col-xs-12 col-md-2 col-sm-3 left">
  	<div class="row">
    	<div class="col-sm-12 s-al-user-details">
        	<div class="row">
        		<div class="col-md-12 s-al-user-image">
                	<img src="assets/img/user_img/1.jpg" alt="User" />
                </div>
                <div class="col-md-12 s-al-user-name">
                	<h1>Khushi<br>Randhawa</h1>
                </div>
                <div class="col-md-12 s-al-user-actions">
                	<a id="TourElement1" class="btn btn-primary" href="#"><i class="fa fa-user"></i> Edit Profile</a>
                </div>
        	</div>
        </div>
        <nav class="col-sm-12 s-al-nav">
        	<ul class="list-unstyled">
            	<li class="active"><a href="dashboard.html"><i class="fa fa-home"></i> Home</a> </li>
            	<li><a href="activity.html"><i class="fa fa-dashboard"></i> Activity</a> </li>
                <li><a href="profile.html"><i class="fa fa-user"></i> About me</a> </li>
                <li><a href="chapter-view.html"><i class="fa fa-book"></i>My Chapter</a> </li>
                <li><a href="freinds.html"><i class="fa fa-users"></i> Friends <span class="pull-right s-al-nav-list-notify">168</span></a></li>
                <li><a href="forums.html"><i class="fa fa-adjust"></i> Forums <span class="pull-right s-al-nav-list-notify">05</span></a></li>
                <li><a href="gallery.html"><i class="fa fa-picture-o"></i> Gallery <span class="pull-right s-al-nav-list-notify">04</span></a></li>
                <li><a href="notice-board.html"><i class="fa fa-book"></i> Notice Board</a></li>
                <li><a href="news.html"><i class="fa fa-book"></i> News</a></li>
                <li><a href="bootstrap-calendar-master/events.html"><i class="fa fa-calendar"></i> Events &amp; Calendar</a></li>
                <li><a href="polls.html"><i class="fa fa-signal"></i> Polls</a></li>
            </ul>
        </nav>
    </div>
  </section>
  <section class="col-md-7 col-sm-9 middle">
  	@yield('content')
  </section>
  <!---->
  <section class="col-md-3 right">
  	<div class="row">
        
        
        <div id="TourElement2" class="widget people-dash">
        	<div class="heading2">Freinds Activity <a href="activity.html"><span class="pull-right btn-round">View All</span></a></div>
            <div class="widget-contant">
            	<ul class="list-unstyled">
                        <li class="row s-al-activity-list">
                            <div class="" style="margin:0 10px; width:98%;">	
                            	<img src="assets/img/user_img/2.jpg" width="40" style="float:left; margin-right:10px;" alt="" />
                                <div class="s-al-activity-title">
                                    <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                    <span>enrolled</span>
                                    <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                    <span>in Imperial College London</span>
                                </div>
                                <div class="s-al-activity-content"></div>
                                <div class="s-al-activity-meta">
                                    <a href="#"><i class="fa fa-thumbs-up"></i> Like</a>&nbsp;&nbsp;&nbsp;
                                    <a href="#"><i class="fa fa-comment"></i> Comment</a>
                                </div>
                            </div>
                        </li>
                        <li class="row s-al-activity-list">
                            <div class="" style="margin:0 10px; width:98%;">	
                            	<img src="assets/img/user_img/2.jpg" width="40" style="float:left; margin-right:10px;" alt="" />
                                <div class="s-al-activity-title">
                                    <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                    <span>enrolled</span>
                                    <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                    <span>in Imperial College London</span>
                                </div>
                                <div class="s-al-activity-content"></div>
                                <div class="s-al-activity-meta">
                                    <a href="#"><i class="fa fa-thumbs-up"></i> Like</a>&nbsp;&nbsp;&nbsp;
                                    <a href="#"><i class="fa fa-comment"></i> Comment</a>
                                </div>
                            </div>
                        </li>
                        <li class="row s-al-activity-list">
                            <div class="" style="margin:0 10px; width:98%;">	
                            	<img src="assets/img/user_img/2.jpg" width="40" style="float:left; margin-right:10px;" alt="" />
                                <div class="s-al-activity-title">
                                    <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                    <span>enrolled</span>
                                    <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                    <span>in Imperial College London</span>
                                </div>
                                <div class="s-al-activity-content"></div>
                                <div class="s-al-activity-meta">
                                    <a href="#"><i class="fa fa-thumbs-up"></i> Like</a>&nbsp;&nbsp;&nbsp;
                                    <a href="#"><i class="fa fa-comment"></i> Comment</a>
                                </div>
                            </div>
                        </li>
                        <li class="row s-al-activity-list">
                            <div class="" style="margin:0 10px; width:98%;">	
                            	<img src="assets/img/user_img/2.jpg" width="40" style="float:left; margin-right:10px;" alt="" />
                                <div class="s-al-activity-title">
                                    <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                    <span>enrolled</span>
                                    <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                    <span>in Imperial College London</span>
                                </div>
                                <div class="s-al-activity-content"></div>
                                <div class="s-al-activity-meta">
                                    <a href="#"><i class="fa fa-thumbs-up"></i> Like</a>&nbsp;&nbsp;&nbsp;
                                    <a href="#"><i class="fa fa-comment"></i> Comment</a>
                                </div>
                            </div>
                        </li>
                    </ul>
            </div>
        </div>
        <div id="TourElement3" class="widget chapter-dash">
            <div class="heading2">Chapter Activity <a href="activity.html"><span class="pull-right btn-round">View All</span></a></div>
            <div class="widget-contant">
                <ul class="list-unstyled">
                        <li class="row s-al-activity-list">
                            <div class="" style="margin:0 10px; width:98%;">	
                                <img src="assets/img/user_img/2.jpg" width="40" style="float:left; margin-right:10px;" alt="" />
                                <div class="s-al-activity-title">
                                    <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                    <span>enrolled</span>
                                    <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                    <span>in Imperial College London</span>
                                </div>
                                <div class="s-al-activity-content"></div>
                                <div class="s-al-activity-meta">
                                    <a href="#"><i class="fa fa-thumbs-up"></i> Like</a>&nbsp;&nbsp;&nbsp;
                                    <a href="#"><i class="fa fa-comment"></i> Comment</a>
                                </div>
                            </div>
                        </li>
                        <li class="row s-al-activity-list">
                            <div class="" style="margin:0 10px; width:98%;">	
                                <img src="assets/img/user_img/2.jpg" width="40" style="float:left; margin-right:10px;" alt="" />
                                <div class="s-al-activity-title">
                                    <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                    <span>enrolled</span>
                                    <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                    <span>in Imperial College London</span>
                                </div>
                                <div class="s-al-activity-content"></div>
                                <div class="s-al-activity-meta">
                                    <a href="#"><i class="fa fa-thumbs-up"></i> Like</a>&nbsp;&nbsp;&nbsp;
                                    <a href="#"><i class="fa fa-comment"></i> Comment</a>
                                </div>
                            </div>
                        </li>
                        <li class="row s-al-activity-list">
                            <div class="" style="margin:0 10px; width:98%;">	
                                <img src="assets/img/user_img/2.jpg" width="40" style="float:left; margin-right:10px;" alt="" />
                                <div class="s-al-activity-title">
                                    <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                    <span>enrolled</span>
                                    <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                    <span>in Imperial College London</span>
                                </div>
                                <div class="s-al-activity-content"></div>
                                <div class="s-al-activity-meta">
                                    <a href="#"><i class="fa fa-thumbs-up"></i> Like</a>&nbsp;&nbsp;&nbsp;
                                    <a href="#"><i class="fa fa-comment"></i> Comment</a>
                                </div>
                            </div>
                        </li>
                        <li class="row s-al-activity-list">
                            <div class="" style="margin:0 10px; width:98%;">	
                                <img src="assets/img/user_img/2.jpg" width="40" style="float:left; margin-right:10px;" alt="" />
                                <div class="s-al-activity-title">
                                    <a href="#" class="s-al-activity-user-name">Khushi Randhawa</a>
                                    <span>enrolled</span>
                                    <a href="#" class="s-al-activity-user-name">Advanced Calculus</a>
                                    <span>in Imperial College London</span>
                                </div>
                                <div class="s-al-activity-content"></div>
                                <div class="s-al-activity-meta">
                                    <a href="#"><i class="fa fa-thumbs-up"></i> Like</a>&nbsp;&nbsp;&nbsp;
                                    <a href="#"><i class="fa fa-comment"></i> Comment</a>
                                </div>
                            </div>
                        </li>
                    </ul>
            </div>
        </div>
        <div class="widget invite-dash">
            <div class="widget-contant">
            	<img src="assets/img/invite.jpg" />
            </div>
        </div>
        
        
        
    </div>
  </section>
</div>
</div>

<script src="{{ asset('assets/js/jquery-1.9.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.sliderTabs.js') }}" type="text/javascript"></script>
<script src="js/tinytools.tourtip.js"></script>
<script>
$("#mySliderTabs").sliderTabs({
		 mousewheel: false,
		 panelArrowsShowOnHover: true,
		  //position: "top"
	});
	/*$('.s-al-activity-heading-a').click(function(){
		var $parentDiv = $(this).parents('.col-md-4');
		if($parentDiv.attr('class')=="col-md-4"){
		$parentDiv.siblings().hide();
		$parentDiv.addClass('col-md-12').removeClass('col-md-4');
		}
		else{
			$parentDiv.siblings().show();
			$parentDiv.removeClass('col-md-12').addClass('col-md-4');
		}
	})*/
	function show() {
			$('#loading').hide();
			$('.s-al-main-content').animate({opacity:1},100);
		};
		setTimeout(show, 100);

    
    </script>
    <script>
	$(document).ready(function () {
		$("#TourElement1").tourTip({
			title: "Edit Profile",
			description: "From here you can able to edit your profile",
			next: true,
			position: 'right'
		});
		$("#TourElement2").tourTip({
			title: "Freinds Activity",
			description: "All of your freind's activity listed over here.",
			previous: true,
			next: true,
			position: 'left'
		});
		$("#TourElement3").tourTip({
			title: "Chapter Activity",
			description: "All of your chapter's activity listed over here.",
			previous: true,
			next: true,
			position: 'left'
		});
		$("#TourElement4").tourTip({
			title: "New Updates",
			description: "This button on right top corners will let you know, how much new updates arrive till you last login.",
			previous: true,
			next: true,
			position: 'bottom'
		});
		$("#TourElement5").tourTip({
			title: "New Notifications/Messages/Freind Request",
			description: "New notifications from alumni, messages from freinds and new freind request will be coming here.",
			previous: true,
			close: true,
			position: 'bottom'
		});
	});
	$('#admin-rights').click(function () {
		$.tourTip.start();
	});
</script>
</body>
</html>