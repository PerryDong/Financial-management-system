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
        <h3>账目实报金额表</h3>
    </div>
    <div class="commonform">
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
        </colgroup>
        <thead>
            <tr>
            	<th >流水单号</th>
                <th >课题名称</th>
                <th >预算种类</th>
                <th >申请时间</th>
                <th >实报金额</th>
            </tr>
        <thead>
        <tbody>
           <?php 
             session_start();
             $proname=$_SESSION['nam'];
            $flag=0;
            //$personname="dpl";
            $xml = new DOMDocument();
			$xml->load('../xml/liushuidans.xml');
			$tempDom= $xml->getElementsByTagName("liushuidan");
            foreach($tempDom as $temp)
			{  
				$tem=$temp->getElementsByTagName("application_pro")->item(0)->nodeValue;
				if($tem==$proname)
				{
					$flag=1;
			?>
					<tr>
					<td><?php echo $temp->getElementsByTagName("num")->item(0)->nodeValue?></td>
	                <td><?php echo $temp->getElementsByTagName("applications_task")->item(0)->nodeValue?></td>
	                <td><?php echo $temp->getElementsByTagName("application_type")->item(0)->nodeValue?></td>
	                <td><?php echo $temp->getElementsByTagName("application_date")->item(0)->nodeValue?></td>
	               <td><?php echo $temp->getElementsByTagName("mount")->item(0)->nodeValue?></td>
	            	</tr>  
	           <?php }
	 	 	 }
	 	 	 if($flag==0)
	 	 	 {?>
	 	 	 	<tr>
	                <td></td>
	                <td></td>
	                <td></td>
	                <td></td>
	                <td></td>
	            	</tr> 
	 	 	 <?php }?>
        </tbody>
</div>
    </div>
</div>
    </div>
</div>
<script type="text/javascript" src="../js/miniyui-v1.62-min.js"></script>
<script type="text/javascript" src="../js/admin.js"></script>
</body>
</html>


