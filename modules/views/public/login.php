<?php
use yii\helpers\Html;

?>

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
    <link rel="stylesheet" href="<?php echo ADMIN_CSS_URL ?>compiled/signin.css" type="text/css" media="screen" />

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>


    <div class="row-fluid login-wrapper">
        <a class="brand" href="index.html"></a>

        <div class="span4 box">
            <div class="content-wrap">
                <h6>慕课商城 - 后台管理</h6>
                <input class="span12" type="text" placeholder="管理员账号" />
                <input class="span12" type="password" placeholder="管理员密码" />
                <a href="#" class="forgot">忘记密码?</a>
                <div class="remember">
                    <input id="remember-me" type="checkbox" />
                    <label for="remember-me">记住我</label>
                </div>
                <a class="btn-glow primary login" href="index.html">登录</a>
            </div>
        </div>

        <div class="span4 no-account">
            <p>没有账户?</p>
            <a href="<?= yii\helpers\Url::to(['public/register']); ?>">注册</a>
        </div>
    </div>

	<!-- scripts -->
    <script src="<?php echo ADMIN_JS_URL ?>jquery-latest.js"></script>
    <script src="<?php echo ADMIN_JS_URL ?>bootstrap.min.js"></script>
    <script src="<?php echo ADMIN_JS_URL ?>theme.js"></script>

    <!-- pre load bg imgs -->
    <script type="text/javascript">
        $(function () {
            // bg switcher
            var $btns = $(".bg-switch .bg");
            $btns.click(function (e) {
                e.preventDefault();
                $btns.removeClass("active");
                $(this).addClass("active");
                var bg = $(this).data("img");

                $("html").css("background-image", "url('<?php echo ADMIN_IMG_URL ?>bgs/" + bg + "')");
            });

        });
    </script>

</body>
</html>