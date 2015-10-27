<!DocType html>
<html>
<head>
<meta charset="utf-8">
<title>财务管理系统</title>
<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>

<body>
<div class="mwin" id="login">
    <div class="hd radius5tr clearfix">
        <h3>管理系统</h3>
        <div class="con clearfix">
           <li> <a href="../html3/registered-2.php">注册</a></li>
        </div>
    </div>
    <div class="bd">
        <form action="../php/login.php" method="POST">
            <p><label>用户名<br><input class="grayipt" type="text" name="username" ></label></p>
            <p><label>密码<br><input class="grayipt" type="password" name="password"></label></p>
            <p class="btns clearfix">
              	<input class="btn" type="reset" name="button2" value="重置">
                <input class="btn" type="submit" name="button" value="登入">
            </p>
        </form>
    </div>
</div>
</body>
</html>