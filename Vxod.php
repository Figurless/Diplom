<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Вход</title>
	<link rel="stylesheet" href="css/Vxod.css" media="screen" type="text/css" />
	<link rel="icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
</head>
<body>

<!-- vladmaxi top bar -->
    <div class="vladmaxi-top">
        <a href= target="_blank"></a>
        <span class="right">
        
        </span>
    <div class="clr"></div>
    </div>
<!--/ vladmaxi top bar -->

    <div id="login">
        <form action="javascript:void(0);" method="get">
            <fieldset class="clearfix">
                <p><span class="fontawesome-user"></span><input type="text" value="Логин" onBlur="if(this.value == '') this.value = 'Логин'" onFocus="if(this.value == 'Логин') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
                <p><span class="fontawesome-lock"></span><input type="password"  value="Пароль" onBlur="if(this.value == '') this.value = 'Пароль'" onFocus="if(this.value == 'Пароль') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
                <p> <a href="admin.php">ВОЙТИ </a></p>
            </fieldset> 
        </form>
        <p>Нет аккаунта? &nbsp;&nbsp;<a href="#">Регистрация</a><span class="fontawesome-arrow-right"></span></p>
    </div>
</body>
</html>