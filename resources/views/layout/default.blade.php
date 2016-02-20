<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login - Alumni</title>
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.modalbox.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/component.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/blue-theme.css') }}" />
<link type="text/css" rel="stylesheet" href="../assets/css/ui.notify.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/login1.css') }}" media="screen" type="text/css" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">
    	<link rel="stylesheet" href="{{ asset('assets/css/login-using-social.css') }}" />

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
<!-- header -->
<header>

	<div class="container-fluid">
    	<div class="row">
        	<div class="col-sm-12">
            	<div class="row s-al-header-bar">
                	<div class="col-sm-2 s-al-header-logo"><a href="index.html"><img src="{{ asset('assets/images/logo.png') }}" class="img-responsive"  alt=""/></a> </div>
                    <div class="col-sm-7 s-al-header-center-bar">
                    	<div class="row">
                    		<div class="col-sm-2 s-al-header-notify-icon">
                            	<div class="row">
                            	
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-sm-3 s-al-header-logout">
                             <a class="pull-right" href="register">Register</a>
                            <a class=" pull-right login" href="login">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    @if ( Session::has('flash_message') )

        <div class="alert {{ Session::get('flash_type') }}">
            <h3>{{ Session::get('flash_message') }}</h3>
        </div>

    @endif
    @yield('content')
</div>
<footer>
	<div class="container">
    	<div class="row">
        	<div class="col-md-6">
                <ul class="list-inline">
                	<li><a href="#">Contact Us</a></li>
                    <li><a href="faq.html">F.A.Q.</a></li>
                    <li><a href="#">Privacy policy</a></li>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="feedback.html">Feedback</a></li>
                </ul>
            </div>
            <div class="col-md-6 text-right">
                <p>Design and Developed by <a href="http://www.walkwel.in" target="_blank">Walkwel Technologies</a></p>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('assets/js/jquery-1.9.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.js" type="text/javascript"></script>

<script type="text/javascript">
	$('#shake').click(function(){
		$('#first').effect('shake',155);
		$('#first').addClass('error');
	})
</script>
         <script>
		 $(function(){
$('a[title]').tooltip();
});

		 </script>    
               

</body>

</html>