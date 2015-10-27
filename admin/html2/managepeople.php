<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>财务管理系统</title>
<link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>

<body>
<div class="header">
    <div id="pageTop" class="clearfix">
    <h1><a href="/" title="财务管理系统"><em>财务管理系统</em></a></h1>
    <p>
        You're logged in as <strong>课题负责人</strong>,
        <a href="../html/login.php">Log out</a>
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
        <h3>人员管理</h3>
    </div>
    <div class="bd">
        <div class="commonform">
    <form action="../php/add_taker.php" method="post">
        <fieldset class="radius5">
            <legend>增添人员</legend>
            <div class="item">
                <label>姓   名</label>
                <input class="txt" type="text" name="taker_name" value="">
            </div>
            <div class="item">
                <label>性   别</label>
                <input class="txt" type="text" name="taker_sex" value="">
            </div>
            <div class="item">
                <label>身份证号</label>
                <input class="txt" type="text" name="taker_id" value="">
            </div>
            <div class="item">
               <p class="btns clearfix bbnn">
              	<input class="btn" type="reset" name="button2" value="重置">
                <input class="btn" type="submit" name="button" value="增添">
            </p>
            </div>
        </fieldset>
    </form>
</div>
<?php session_start();
include_once 'module/grid1.php'; ?>
    </div>
	
</div>

    </div>
</div>
</body>
</html>