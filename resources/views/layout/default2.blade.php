<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News</title>
    <link rel="stylesheet" type="text/css" href="{{  asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/styleshwwt.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/blue-theme.css') }}" />
</head>
<body>
<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="row s-al-header-bar">
                    <div class="col-sm-2 s-al-header-logo">
                        <img src="{{ asset('assets/images/logo.png')  }}" class="img-responsive"  alt=""/>
                    </div>
                    <div class="col-sm-7 s-al-header-center-bar">
                        <div class="row">
                            <div class="col-sm-2 s-al-header-notify-icon">
                                <div class="row">

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-3 s-al-header-logout">
                        <!--<a href="#" class="col-sm-4"><i class="fa fa-users"></i>
                                <div class="dropdown clearfix">
                                  <button data-toggle="dropdown" id="dropdownMenu1" type="button" class="btn dropdown-toggle sr-only">
                                    Dropdown
                                    <span class="caret"></span>
                                  </button>
                                </div>

                                </a>
                                <a href="#" class="col-sm-4"><i class="fa fa-comments"></i></a>
                                <a href="#" class="col-sm-4"><i class="fa fa-bell"></i></a>-->
                        <a class="s-al-logout pull-right" href="user-logout.html">Logout</a>

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
                            <img src="{{asset('assets/img/user_img/1.jpg') }}" alt="User" />
                        </div>
                        <div class="col-md-12 s-al-user-name">
                            <h1>Khushi<br>Randhawa</h1>
                        </div>
                        <div class="col-md-12 s-al-user-actions">
                            <a class="btn btn-primary" href="#"><i class="fa fa-user"></i> Friends</a>
                            <a class="btn btn-default" href="#"><i class="fa fa-comment"></i> Message</a>
                        </div>
                    </div>
                </div>
                <nav class="col-sm-12 s-al-nav">
                    <ul class="list-unstyled">
                        <li><a href="dashboard.html"><i class="fa fa-home"></i> Home</a> </li>
                        <li><a href="activity.html"><i class="fa fa-dashboard"></i> Activity</a> </li>
                        <li><a href="profile.html"><i class="fa fa-user"></i> About me</a> </li>
                        <li><a href="member-directory.html"><i class="fa fa-users"></i> Friends <span class="pull-right s-al-nav-list-notify">168</span></a></li>
                        <li><a href="forums.html"><i class="fa fa-adjust"></i> Forums <span class="pull-right s-al-nav-list-notify">05</span></a></li>
                        <li><a href="gallery.html"><i class="fa fa-picture-o"></i> Gallery <span class="pull-right s-al-nav-list-notify">04</span></a></li>
                        <li class="active"><a href="/fb/public/news"><i class="fa fa-book"></i> News</a></li>
                        <li><a href="bootstrap-calendar-master/events.html"><i class="fa fa-calendar"></i> Events &amp; Calendar</a></li>
                        <li><a href="polls.html"><i class="fa fa-signal"></i> Polls</a></li>
                        <!--<li><a href="forums.html">Forums </a></li>-->
                    </ul>
                </nav>
            </div>
        </section>
        <section class="col-md-7 middle">
            @yield('content')
        </section>


<script src="{{ asset('assets/js/jquery-1.9.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script>
    function show() {
        $('#loading').hide();
        $('.s-al-main-content').animate({opacity:1},100);
    };
    setTimeout(show, 100);

</script>
</body>
</html>