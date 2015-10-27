<div class="grid radius5">
    <table>
        <colgroup>
        	<col width="196">
            <col width="196">
        </colgroup>
        <thead>
            <tr>
                <th>课题名称</th>
                <th>负责人</th>
            </tr>
        <thead>
        <tbody>
             <?php 
            $name=$_SESSION["nam"];
            //$personname="dpl";
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
	                <td><?php echo $temp->getElementsByTagName("t_person")->item(0)->nodeValue?></td>
	            	</tr>  
	           <?php }
	 	 	 }
	 	 	 if($flag==0)
	 	 	 {?>
	 	 	 	<tr>
	                <td>无</td>
	                <td>无</td>
	            	</tr>  
	 	 	<?php }?> 
        </tbody>
    </table>
</div>
