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
    	You're logged in as <?php echo $_GET['person_name']?>,
        <a href="../html/login.php">Log out</a>
    </p>
</div>
</div>
<div class="content clearfix">
    <div class="main">
    <div class="mwin" id="page">
    <div class="hd radius5tr clearfix">
        <h3>参与</h3>
    </div>
    <div class="bd">
        <?php include_once 'module/grid_prorole.php'; ?>
        <?php include_once 'module/grid_mmanager.php'; ?>
        <?php include_once 'module/grid_tmanager.php'; ?>
        <?php include_once 'module/grid_ttaker.php'; ?>
    </div>
</div>
    </div>
</div>
<div class="footer">
   <div id="copyright">
    Copyright &copy; 2014, 第三组版权所有
    &nbsp;
	</div>
</div>
<script type="text/javascript" src="../js/miniyui-v1.62-min.js"></script>
<script type="text/javascript" src="../js/admin.js"></script>
</body>
</html>
