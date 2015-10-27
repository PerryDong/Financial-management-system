<div class="grid radius5">
    <table>
        <colgroup>
        	<col width="65">
            <col width="65">
            <col width="65">
            <col width="65">
            <col width="65">
            <col width="67">
       
            
        </colgroup>
        <thead>
            <tr>
                <th>课题名称</th>
                <th>课题负责人</th>
                <th>申请种类</th>
                <th>申请时间</th>
                <th>申请金额</th>
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
			$xml->load('../xml/applications.xml');
			$tempDom= $xml->getElementsByTagName("application");
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
	                <td><?php echo $temp->getElementsByTagName("application_mount")->item(0)->nodeValue?></td>
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
	            	</tr> 
	 	 	 <?php }?>
        </tbody>
    </table>
</div>
