<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Observatorio del Libro: FILVEN 2013</title>

<?php decorate_with(false) ?>

<style>

/*******************
SELECTION STYLING
*******************/

::selection {
	color: #fff;
	background: #f676b2; /* Safari */
}
::-moz-selection {
	color: #fff;
	background: #f676b2; /* Firefox */
}

/*******************
BODY STYLING
*******************/

* {
	margin: 0;
	padding: 0;
	border: 0;
}

body {
	background: url(/images/fondo_login.png) repeat;
	font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
	font-weight:300;
	text-align: left;
	text-decoration: none;
}

#wrapper {
	/* Center wrapper perfectly */
	width: 300px;
	height: 400px;
	position: absolute;
	left: 50%;
	top: 50%;
	margin-left: -150px;
	margin-top: -200px;
}

/* Download Button (Demo Only) */
.download {
	display: block;
	position: absolute;
	float: right;
	right: 25px;
	bottom: 25px;
	padding: 5px;
	
	font-weight: bold;
	font-size: 11px;
	text-align: right;
	text-decoration: none;
	color: rgba(0,0,0,0.5);
	text-shadow: 1px 1px 0 rgba(256,256,256,0.5);
}

.download:hover {
	color: rgba(0,0,0,0.75);
	text-shadow: 1px 1px 0 rgba(256,256,256,0.5);
}

.download:focus {
	bottom: 24px;
}

.gradient {
	/* Center Positioning */
	width: 600px;
	height: 600px;
	position: fixed;
	left: 50%;
	top: 50%;
	margin-left: -300px;
	margin-top: -300px;
	
	/* CSS3 Gradient */
	background-image: -webkit-gradient(radial, 0% 0%, 0% 100%, from(rgba(213,246,255,1)), to(rgba(213,246,255,0)));
	background-image: -webkit-radial-gradient(50% 50%, 40% 40%, rgba(213,246,255,1), rgba(213,246,255,0));
	background-image: -moz-radial-gradient(50% 50%, 50% 50%, rgba(213,246,255,1), rgba(213,246,255,0));
	background-image: -ms-radial-gradient(50% 50%, 50% 50%, rgba(213,246,255,1), rgba(213,246,255,0));
	background-image: -o-radial-gradient(50% 50%, 50% 50%, rgba(213,246,255,1), rgba(213,246,255,0));
}

/*******************
LOGIN FORM
*******************/

.login-form {
	width: 300px;
	margin: 0 auto;
	position: relative;
	z-index:5;
	
	background: #fff;
	border: 1px solid #fff;
	border-radius: 5px;
	
	box-shadow: 0 1px 3px rgba(0,0,0,0.5);
	-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
	-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
}

/*******************
HEADER
*******************/

.login-form .header {
	padding: 40px 30px 30px 30px;
}

.login-form .header h1 {
	font-family: 'Bree Serif', serif;
	font-weight: 300;
	font-size: 28px;
	line-height:34px;
	color: #414848;
	text-shadow: 1px 1px 0 rgba(256,256,256,1.0);
	margin-bottom: 10px;
}

.login-form .header span {
	font-size: 11px;
	line-height: 16px;
	color: #678889;
	text-shadow: 1px 1px 0 rgba(256,256,256,1.0);
}

/*******************
CONTENT
*******************/

.login-form .content {
	padding: 0 30px 25px 30px;
}

/* Input field */
.login-form .content .input {
	width: 188px;
	padding: 15px 25px;
	
	font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
	font-weight: 400;
	font-size: 14px;
	color: #9d9e9e;
	text-shadow: 1px 1px 0 rgba(256,256,256,1.0);
	
	background: #fff;
	border: 1px solid #fff;
	border-radius: 5px;
	
	box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
	-moz-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
	-webkit-box-shadow: inset 0 1px 3px rgba(0,0,0,0.50);
}

/* Second input field */
.login-form .content .password, .login-form .content .pass-icon {
	margin-top: 25px;
}

.login-form .content .input:hover {
	background: #dfe9ec;
	color: #414848;
}

.login-form .content .input:focus {
	background: #dfe9ec;
	color: #414848;
	
	box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
	-moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
	-webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
}

.user-icon, .pass-icon {
	width: 46px;
	height: 47px;
	display: block;
	position: absolute;
	left: 0px;
	padding-right: 2px;
	z-index: 3;
	
	-moz-border-radius-topleft: 5px;
	-moz-border-radius-bottomleft: 5px;
	-webkit-border-top-left-radius: 5px;
	-webkit-border-bottom-left-radius: 5px;
}


/* Animation */
.input, .user-icon, .pass-icon, .button, .register {
	transition: all 0.5s;
	-moz-transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-o-transition: all 0.5s;
	-ms-transition: all 0.5s;
}

/*******************
FOOTER
*******************/

.login-form .footer {
	padding: 25px 30px 40px 30px;
	overflow: auto;
	
	background: #d4dedf;
	border-top: 1px solid #fff;
	
	box-shadow: inset 0 1px 0 rgba(0,0,0,0.15);
	-moz-box-shadow: inset 0 1px 0 rgba(0,0,0,0.15);
	-webkit-box-shadow: inset 0 1px 0 rgba(0,0,0,0.15);
}

/* Login button */
.login-form .footer .button {
	float:right;
	padding: 11px 25px;
	
	font-family: 'Bree Serif', serif;
	font-weight: 300;
	font-size: 18px;
	color: #fff;
	text-shadow: 0px 1px 0 rgba(0,0,0,0.25);
	
	background: #56c2e1;
	border: 1px solid #46b3d3;
	border-radius: 5px;
	cursor: pointer;
	
	box-shadow: inset 0 0 2px rgba(256,256,256,0.75);
	-moz-box-shadow: inset 0 0 2px rgba(256,256,256,0.75);
	-webkit-box-shadow: inset 0 0 2px rgba(256,256,256,0.75);
}

.login-form .footer .button:hover {
	background: #3f9db8;
	border: 1px solid rgba(256,256,256,0.75);
	
	box-shadow: inset 0 1px 3px rgba(0,0,0,0.5);
	-moz-box-shadow: inset 0 1px 3px rgba(0,0,0,0.5);
	-webkit-box-shadow: inset 0 1px 3px rgba(0,0,0,0.5);
}

.login-form .footer .button:focus {
	position: relative;
	bottom: -1px;
	
	background: #56c2e1;
	
	box-shadow: inset 0 1px 6px rgba(256,256,256,0.75);
	-moz-box-shadow: inset 0 1px 6px rgba(256,256,256,0.75);
	-webkit-box-shadow: inset 0 1px 6px rgba(256,256,256,0.75);
}

/* Register button */
.login-form .footer .register {
	display: block;
	float: right;
	padding: 10px;
	margin-right: 20px;
	
	background: none;
	border: none;
	cursor: pointer;
	
	font-family: 'Bree Serif', serif;
	font-weight: 300;
	font-size: 18px;
	color: #414848;
	text-shadow: 0px 1px 0 rgba(256,256,256,0.5);
}

.login-form .footer .register:hover {
	color: #3f9db8;
}

.login-form .footer .register:focus {
	position: relative;
	bottom: -1px;
}   
    
</style>    

<script type="text/javascript">
$(document).ready(function() {
	$(".username").focus(function() {
		$(".user-icon").css("left","-48px");
	});
	$(".username").blur(function() {
		$(".user-icon").css("left","0px");
	});
	
	$(".password").focus(function() {
		$(".pass-icon").css("left","-48px");
	});
	$(".password").blur(function() {
		$(".pass-icon").css("left","0px");
	});
});
</script>


</head>
<body>

<!--WRAPPER-->
<div id="wrapper">

	<!--SLIDE-IN ICONS-->
    <div class="user-icon"></div>
    <div class="pass-icon"></div>
    <!--END SLIDE-IN ICONS-->

<!--LOGIN FORM-->
<form name="login-form" class="login-form" action="" method="post">

	<!--HEADER-->
    <div class="header">
        <center><? echo image_tag('logo_cenal.jpg')?></center>
    </div>
    <!--END HEADER-->
	
	<!--CONTENT-->
    <div class="content">
    <form id="login" action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
	       <center><?php echo $form['username']->render(array('class'=>"input username","placeholder"=>"Usuario")) ?></center>
               <center><?php echo $form['password']->render(array('class'=>"input password", "placeholder"=>"Contraseña")) ?></center>
                <?php echo $form['_csrf_token']->render() ?>
    </div>
    <!--END CONTENT-->
    
    <!--FOOTER-->
    <div class="footer">
    <!--LOGIN BUTTON--><input type="submit" name="submit" value="Ingresar" class="button"><!--END LOGIN BUTTON-->
    </div>
    <!--END FOOTER-->
    </form>

</form>
<!--END LOGIN FORM-->

</div>

</body></html>