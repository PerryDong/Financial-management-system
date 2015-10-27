<div class="grid radius5">
    <table>
        <colgroup>
            <col width="110">
            <col width="122">
            <col width="110">
            <col width="42">
        </colgroup>
        <thead>
            <tr>
                <th>项目名称</th>
                <th>课题名称</th>
                <th>课题负责人</th>
                <th></th>
            </tr>
        <thead>
        <tbody>
            <?php 
            $personname=$_GET['person_name'];
            $flag=0;
            //$personname="dpl";
            $xml = new DOMDocument();
			$xml->load('../xml/t_managers.xml');
			$tempDom= $xml->getElementsByTagName("t_manager");
            foreach($tempDom as $temp)
			{  
				$tem=$temp->getElementsByTagName("pro_name")->item(0)->nodeValue;
				$tem2=$temp->getElementsByTagName("t_name")->item(0)->nodeValue;
				if($personname==($temp->getElementsByTagName("t_manager_name")->item(0)->nodeValue))
				{
					$flag=1;
			?>
					<tr>
	                <td><?php echo $tem?></td>
	                <td><?php echo $temp->getElementsByTagName("t_name")->item(0)->nodeValue?></td>
	                <td><?php echo $temp->getElementsByTagName("t_manager_name")->item(0)->nodeValue?></td>
	                <td><a href="../html2/default.php?pname=<?php echo $tem?>&tname=<?php echo $tem2?>">进入</a></td>
	            	</tr>  
	           <?php }
	 	 	 }
	 	 	 if($flag==0)
	 	 	 {?>
	 	 	 	<tr>
	                <td>无</td>
	                <td>无</td>
	                <td><?php echo $personname?></td>
	                <td></td>
	            	</tr> 
	 	 	 <?php }?>
        </tbody>
    </table>
</div>