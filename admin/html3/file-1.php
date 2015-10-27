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
        <?php include_once 'module/menu-1.php'; ?>
    </div>
    <div class="main">
    <div class="mwin" id="page">
    <div class="hd radius5tr clearfix"></div>
    <div class="bd">
        <div class="commonform">
    <form action="../php/add_diary.php" method="post" enctype="multipart/form-data">
        <fieldset class="radius5">
            <legend>记录完成信息</legend>
            <div class="item">
                <label>工作日志</label>
                <input class="txt" type="text" name="text" >
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
