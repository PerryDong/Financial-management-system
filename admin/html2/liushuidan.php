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
    <h1><a href="/" title="财务管理系统"><em>财务台管理系统</em></a></h1>
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
        <h3>申请/报账</h3>
    </div>
    <div class="bd">
        <div class="commonform">
    <form action="../php/add_liushuidan.php" method="post" enctype="multipart/form-data">
        <fieldset class="radius5">
            <legend>流水单信息</legend>
            <div class="item">
                <label>课题名称</label>
                <input class="txt" type="text" name="application_task" >
            </div>
            <div class="item">
                <label>课题负责人</label>
                <input class="txt" type="text" name="application_taskper" >
             </div>
            <div class="item">
                <label>申请种类</label>
                <input class="txt" type="text" name="application_type" >
            </div>
            <div class="item">
                <label>申请时间</label>
                <input class="txt" type="text" name="application_date" >
            </div>
            <div class="item">
                <label>流水单号</label>
                <input class="txt" type="text" name="num">
            </div>
            <div class="item">
                <label>实批金额</label>
                <input class="txt" type="text" name="mount">
            </div>
           <div class="item">
                <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
                <label>附件</label> <input  type="file" name="up_myfile">
                <input class="btns  btn" type="submit" name="button" value="提交">
            </div>
            
        </fieldset>
    </form>
</div>
 <div class="bd">
          <?php include_once 'module/grid2.php'; ?>
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