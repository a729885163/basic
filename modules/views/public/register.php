<!DOCTYPE html>
<html class="login-bg">
<head>
	<title>慕课商城 - 后台管理</title>
    
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
    <!-- bootstrap -->
    <link href="<?php echo ADMIN_CSS_URL ?>bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo ADMIN_CSS_URL ?>bootstrap/bootstrap-responsive.css" rel="stylesheet" />
    <link href="<?php echo ADMIN_CSS_URL ?>bootstrap/bootstrap-overrides.css" type="text/css" rel="stylesheet" />

    <!-- global styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo ADMIN_CSS_URL ?>layout.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo ADMIN_CSS_URL ?>elements.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo ADMIN_CSS_URL ?>icons.css" />

    <!-- libraries -->
    <link rel="stylesheet" type="text/css" href="<?php echo ADMIN_CSS_URL ?>lib/font-awesome.css" />
    
    <!-- this page specific styles -->
    <link rel="stylesheet" href="<?php echo ADMIN_CSS_URL ?>compiled/signup.css" type="text/css" media="screen" />

    <!-- open sans font -->
    <link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css' />

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>
    <div class="header">
        <a href="index.html">
            <img src="<?php echo ADMIN_IMG_URL ?>logo.png" class="logo" />
        </a>
    </div>
    <div class="row-fluid login-wrapper">
        <div class="box">
            <div class="content-wrap">
                <h6>Sign Up</h6>
                <input class="span12" type="text" placeholder="E-mail address" />
                <input class="span12" type="password" placeholder="Password" />
                <input class="span12" type="password" placeholder="Confirm Password" />
                <div class="action">
                    <a class="btn-glow primary signup" href="index.html">Sign up</a>
                </div>                
            </div>
        </div>

        <div class="span4 already">
            <p>Already have an account?</p>
            <a href="signin.html">Sign in</a>
        </div>
    </div>

	<!-- scripts -->
    <script src="<?php echo ADMIN_JS_URL ?>jquery-latest.js"></script>
    <script src="<?php echo ADMIN_JS_URL ?>bootstrap.min.js"></script>
    <script src="<?php echo ADMIN_JS_URL ?>theme.js"></script>

</body>
</html>