<!DocType html>
<html>
<head>
<meta charset="utf-8">
<title>财务管理系统</title>
<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>

<body>
<div class="header">
    <div id="pageTop" class="clearfix">
    <h1><a href="/" title="财务管理系统"><em>财务台管理系统</em></a></h1>
    <p>
        You're logged in as <strong>登录角色</strong>,
        <a href="">Log out</a>
    </p>
</div>
</div>
<div class="content clearfix">
    <div class="mwin sidebar">
        <?php include_once 'module/menu.php'; ?>
    </div>
    <div class="main">
    <div class="mwin" id="page">
    <div class="hd radius5tr clearfix">
        <h3>消息</h3>
    </div>
    <div class="bd">
        <div class="commonform">
    <form action="../php/add_message.php" method="POST">
        <fieldset class="radius5">
            <legend>发布消息</legend>
            <div class="item">
            	<div class="item">
                <label>消息接收者</label>
                <select name="select"> 
                <option value="#">---请选择---</option>
                <option value="财务负责人">财务负责人</option> 
                <option value="课题负责人">课题负责人</option> 
                <option value="课题参与人">课题参与人</option> 
                <option value="所有人">所有人</option> 
                </select> 
                </div>
                <input class="txt2" type="text" name="name" value="">
            </div>
            <div class="item">
               <p class="btns clearfix bbnn">
              	<input class="btn" type="reset" name="button2" value="重置">
                <input class="btn" type="submit" name="button" value="发布">
            </p>
            </div>
        </fieldset>
    </form>
</div>
    </div>
</div>
    </div>
</div>
<div class="footer">
   <div id="copyright">
	</div>
</div>
<script type="text/javascript" src="../js/miniyui-v1.62-min.js"></script>
<script type="text/javascript" src="../js/admin.js"></script>
</body>
</html>
