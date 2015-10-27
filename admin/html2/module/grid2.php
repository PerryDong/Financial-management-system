<div class="grid radius5">
    <table>
        <colgroup>
        	<col width="56">
            <col width="56">
            <col width="56">
            <col width="56">
            <col width="56">
            <col width="56">
            <col width="56">
       
            
        </colgroup>
        <thead>
            <tr>
                <th>课题名称</th>
                <th>课题负责人</th>
                <th>申请种类</th>
                <th>申请时间</th>
                <th>流水单号</th>
                <th>实批金额</th>
                <th>附件</th>
            </tr>
        <thead>
        <tbody>
           <?php 
           	session_start();
			$pname1=$_SESSION['pnam'];     	
			$tname1=$_SESSION['tnam'];
            $flag=0;
            //$personname="dpl";
            $xml = new DOMDocument();
			$xml->load('../xml/liushuidans.xml');
			$tempDom= $xml->getElementsByTagName("liushuidan");
            foreach($tempDom as $temp)
			{  
				$tem=$temp->getElementsByTagName("application_pro")->item(0)->nodeValue;
				$tem2=$temp->getElementsByTagName("applications_task")->item(0)->nodeValue;
				if(($tem==$pname1)&&$tem2==$tname1)
				{
					$flag=1;
			?>
					<tr>
	                <td><?php echo $tem2?></td>
	                <td><?php echo $temp->getElementsByTagName("application_taskper")->item(0)->nodeValue?></td>
	                <td><?php echo $temp->getElementsByTagName("application_type")->item(0)->nodeValue?></td>
	                <td><?php echo $temp->getElementsByTagName("application_date")->item(0)->nodeValue?></td>
	                <td><?php echo $temp->getElementsByTagName("num")->item(0)->nodeValue?></td>
	                <td><?php echo $temp->getElementsByTagName("mount")->item(0)->nodeValue?></td>
	                 <td> <a href=<?php echo $temp->getElementsByTagName("path")->item(0)->nodeValue?>>查看附件</a></td>
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
</div>
