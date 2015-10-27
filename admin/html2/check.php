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
        <h3>项目</h3>
    </div>
    <div class="bd">
        <div class="commonform">
    <form action="" method="post">
        <fieldset class="radius5">
            <div class="item">
                <?php
                session_start();
               	$pname1=$_SESSION['pnam'];     	
               	$tname1=$_SESSION['tnam'];
	            $flag=0;
	            //$personname="dpl";
	            $xml = new DOMDocument();
				$xml->load('../xml/tasks.xml');
				$tempDom= $xml->getElementsByTagName("task");
	            foreach($tempDom as $temp)
				{  
					$tem=$temp->getElementsByTagName("t_num")->item(0)->nodeValue;
					if($pname1==$tem)
					{
						if($tname1==$temp->getElementsByTagName("t_name")->item(0)->nodeValue)
						{
						echo '<p style="font-size:12pt;text-align:center">'."课题所属项目名称 ".$tem.'<p>';?>
			</div>
			<div class="item">
                <?php echo '<p style="font-size:12pt;text-align:center">'."课题名称 ".$temp->getElementsByTagName("t_name")->item(0)->nodeValue.'<p>';?>
            </div>
			<div class="item">
                <?php echo '<p style="font-size:12pt;text-align:center">'."负责人 ".$temp->getElementsByTagName("t_person")->item(0)->nodeValue.'<p>';?>
            </div>
            <div class="item">
                <?php echo '<p style="font-size:12pt;text-align:center">'.$temp->getElementsByTagName("t_information")->item(0)->nodeValue.'<p>';?>
            </div>
				<?php }
					}
		 	 	}
					?>
            
        </fieldset>
    </form>
</div>
        
        <?php include_once 'module/grid1.php'; ?>
    </div>
</div>
    </div>
</div>
<script type="text/javascript" src="../js/miniyui-v1.62-min.js"></script>
<script type="text/javascript" src="../js/admin.js"></script>
</body>
</html>