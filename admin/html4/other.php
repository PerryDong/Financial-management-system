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
        <h3>到目前各课题预算剩余</h3>
    </div>
    <div class="commonform">
</div>
    <div class="bd">
        <div class="grid radius5">
    <table>
        <colgroup>
        	<col width="128">
            <col width="128">
            <col width="128">
            <col width="128">
            <col width="162">
        </colgroup>
        <thead>
            <tr>
                <th >课题名称</th>
                <th>书籍材料费</th>
                <th>差旅费</th>
                <th>硬件费用</th>
                <th>其他</th>
            </tr>
        <thead>
        <tbody>
           <?php 
             session_start();
             $proname="拧螺丝";
            $flag=0;
            //$personname="dpl";
            $xml_1 = new DOMDocument();
			$xml_1->load('../xml/liushuidans.xml');
			$xml_2 = new DOMDocument();
			$xml_2->load('../xml/tasks.xml');
			
			$temp_task= $xml_2->getElementsByTagName("task");
			
			foreach ($temp_task as $temp)
			{
				$tempro=$temp->getElementsByTagName("t_num")->item(0)->nodeValue;
				$temtask=$temp->getElementsByTagName("t_name")->item(0)->nodeValue;
				$tembook_m=$temp->getElementsByTagName("book_m")->item(0)->nodeValue;
				$temtrain_m=$temp->getElementsByTagName("train_m")->item(0)->nodeValue;
				$temhardware_m=$temp->getElementsByTagName("hardware_m")->item(0)->nodeValue;
				$temother_m=$temp->getElementsByTagName("other_m")->item(0)->nodeValue;
				if($tempro==$proname)
				{	
					$flag=1;
					$temp_liushuidan= $xml_1->getElementsByTagName("liushuidan");
					foreach ($temp_liushuidan as $temp2)
					{
						if(($temp2->getElementsByTagName("applications_task")->item(0)->nodeValue)==$temtask&&($temp2->getElementsByTagName("application_pro")->item(0)->nodeValue)==$tempro)
						{
							if($temp2->getElementsByTagName("application_type")->item(0)->nodeValue=="书籍材料费")
							{
								$tembook_m=$tembook_m-$temp2->getElementsByTagName("mount")->item(0)->nodeValue;
							}
							if($temp2->getElementsByTagName("application_type")->item(0)->nodeValue=="差旅费")
							{
								$temtrain_m=$temtrain_m-$temp2->getElementsByTagName("mount")->item(0)->nodeValue;
							}
							if($temp2->getElementsByTagName("application_type")->item(0)->nodeValue=="硬件费用")
							{
								$temhardware_m=$temhardware_m-$temp2->getElementsByTagName("mount")->item(0)->nodeValue;
							}
							if($temp2->getElementsByTagName("application_type")->item(0)->nodeValue=="其他")
							{
								$temother_m=$temother_m-$temp2->getElementsByTagName("mount")->item(0)->nodeValue;
							}
						}
					}?>
					
					<tr>
	                <td><?php echo $temtask?></td>
	                 <td><?php echo $tembook_m?></td>
	                 <td><?php echo $temtrain_m?></td>
	                 <td><?php echo $temhardware_m?></td>
	                 <td><?php echo $temother_m?></td>
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


