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
        <a href="../html/role.php">Log out</a>
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
        <h3>项目</h3>
    </div>
    <div class="bd">
        <div class="commonform">
    <form action="?" method="POST">
        <fieldset class="radius5">
            <legend>基本信息</legend>
            <div class="item">
                <?php
                session_start();
               	$name=$_SESSION['nam'];
	            $flag=0;
	            //$personname="dpl";
	            $xml = new DOMDocument();
				$xml->load('../xml/projects.xml');
				$tempDom= $xml->getElementsByTagName("project");
	            foreach($tempDom as $temp)
				{  
					$tem=$temp->getElementsByTagName("pro_name")->item(0)->nodeValue;
					if($name==$tem)
					{
						echo '<p style="font-size:12pt;text-align:center">'."名称 ".$tem.'<p>';?>
			</div>
			<div class="item">
                <?php echo '<p style="font-size:12pt;text-align:center">'."编号 ".$temp->getElementsByTagName("pro_num")->item(0)->nodeValue.'<p>';?>
            </div>
			<div class="item">
                <?php echo '<p style="font-size:12pt;text-align:center">'."负责人 ".$temp->getElementsByTagName("pro_person")->item(0)->nodeValue.'<p>';?>
            </div>
            <div class="item">
                <?php echo '<p style="font-size:12pt;text-align:center">'.$temp->getElementsByTagName("pro_information")->item(0)->nodeValue.'<p>';?>
            </div>
				<?php }
		 	 	}
					?>
            
            
        </fieldset>
    </form>
</div>
        
        <?php include_once 'module/grid.php'; ?>
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
