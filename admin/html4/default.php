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
        <h3>课题预算</h3>
    </div>
    <div class="bd">
        <div class="grid radius5">
    <table>
        <colgroup>
        	<col width="64">
            <col width="64">
            <col width="64">
            <col width="64">
            <col width="76">
            <col width="60">
        </colgroup>
        <thead>
            <tr>
                <th>课题名称</th>
                <th>书籍材料费</th>
                <th>差旅费</th>
                <th>硬件费用</th>
                <th>其他</th>
            </tr>
        <thead>
        <tbody>
            <?php 
            session_start();
            $_SESSION["nam"]=$_GET['name'];
            $name=$_SESSION["nam"];
            $flag=0;
            $xml = new DOMDocument();
			$xml->load('../xml/tasks.xml');
			$tempDom= $xml->getElementsByTagName("task");
            foreach($tempDom as $temp)
			{  
				$tem=$temp->getElementsByTagName("t_num")->item(0)->nodeValue;
				if($name==$tem)
				{
					$flag=1;
			?>
					<tr>
	                <td><?php echo $temp->getElementsByTagName("t_name")->item(0)->nodeValue?></td>
	                <td><?php echo $temp->getElementsByTagName("book_m")->item(0)->nodeValue?></td>
	                <td><?php echo $temp->getElementsByTagName("train_m")->item(0)->nodeValue?></td>
	                 <td><?php echo $temp->getElementsByTagName("hardware_m")->item(0)->nodeValue?></td>
	                 <td><?php echo $temp->getElementsByTagName("other_m")->item(0)->nodeValue?></td>
	            	</tr>  
	           <?php }
	 	 	 }
	 	 	 if($flag==0)
	 	 	 {?>
	 	 	 	<tr>
	                <td><?php echo $temp->getElementsByTagName("t_name")->item(0)->nodeValue?></td>
	                <td>无</td>
	                <td>无</td>
	                <td>无</td>
	                <td>无</td>
	            	</tr>  
	 	 	<?php }?> 
        </tbody>
    </table>
</div>
    </div>
</div>
    </div>
</div>
<div class="footer">
</div>
<script type="text/javascript" src="../js/miniyui-v1.62-min.js"></script>
<script type="text/javascript" src="../js/admin.js"></script>
</body>
</html>


