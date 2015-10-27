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
        <h3>申请表</h3>
    </div>
    <form action="../php/handle2.php" method="post">
    <div class="bd">
      <div class="grid radius5">
      
    <table>
        <colgroup>
            <col width="42">
            <col width="70">
            <col width="70">
            <col width="70">
            <col width="70">
            <col width="70">
            <col width="56">
        </colgroup>
        <thead>
            <tr>
                <th>选择</th>
                <th>课题名称</th>
                <th>申请种类</th>
                <th>申请金额</th>
                <th>申请日期</th>
                <th>附件</th>
                <th>状态</th>
            </tr>
        <thead>
        <tbody>
            <?php 
             session_start();
             $proname=$_SESSION['nam'];
            $flag=0;
            //$personname="dpl";
            $xml = new DOMDocument();
			$xml->load('../xml/applications.xml');
			$tempDom= $xml->getElementsByTagName("application");
            foreach($tempDom as $temp)
			{  
				$tem=$temp->getElementsByTagName("application_pro")->item(0)->nodeValue;
				if(($tem==$proname))
				{
					$temm=($temp->getElementsByTagName("applications_task")->item(0)->nodeValue).($temp->getElementsByTagName("application_type")->item(0)->nodeValue).($temp->getElementsByTagName("application_date")->item(0)->nodeValue);
					$flag=1;
			?>
					<tr>
					 <td class="center"><input type="checkbox" name="select[]" value=<?php echo $temm?>></td>
	                <td><?php echo $temp->getElementsByTagName("applications_task")->item(0)->nodeValue?></td>
	                <td><?php echo $temp->getElementsByTagName("application_type")->item(0)->nodeValue?></td>
	                <td><?php echo $temp->getElementsByTagName("application_mount")->item(0)->nodeValue?></td>
	                <td><?php echo $temp->getElementsByTagName("application_date")->item(0)->nodeValue?></td>
	               <td> <a href=<?php echo $temp->getElementsByTagName("path")->item(0)->nodeValue?>>查看附件</a></td>
	               <td><?php echo $temp->getElementsByTagName("m_manager_state")->item(0)->nodeValue?></td>
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
	                <td></td>
	                <td></td>
	            	</tr> 
	 	 	 <?php }?>
        </tbody>
    </table>
    <tr>
    <tfoot>
    <p class="bbbnn">
              	<input class=" btn" type="submit" name="button" value="通过">
                <input class="btn" type="submit" name="button2" value="删除">
    </p>
    </tfoot>
    </form>
    </tr>
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


