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
                <th>课题参与人</th>
                <th></th>
            </tr>
        <thead>
        <tbody>
            <?php 
            $personname=$_GET['person_name'];
            //$personname="dpl";
            $flag=0;
            $xml = new DOMDocument();
			$xml->load('../xml/t_takers.xml');
			$tempDom= $xml->getElementsByTagName("t_taker");
            foreach($tempDom as $temp)
			{  
				$tem=$temp->getElementsByTagName("t_name")->item(0)->nodeValue;
				if($personname==($temp->getElementsByTagName("t_taker_name")->item(0)->nodeValue))
				{
					$flag=1;
			?>
					<tr>
					<td><?php echo $temp->getElementsByTagName("taker_pro")->item(0)->nodeValue?></td>
	                <td><?php echo $tem?></td>
	                <td><?php echo $temp->getElementsByTagName("t_taker_name")->item(0)->nodeValue?></td>
	                <td><a href="../html3/file-1.php?name=<?php echo $tem?>">进入</a></td>
	            	</tr>  
	           <?php }
	 	 	 }
	 	 	 if($flag==0)
	 	 	 {?>
	 	 	 	<tr>
	                <td>无</td>
	                <td><?php echo $personname?></td>
	                <td></td>
	            	</tr>  
	 	 	 <?php }?>
        </tbody>
    </table>
</div>