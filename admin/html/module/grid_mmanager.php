<div class="grid radius5">
    <table>
        <colgroup>
            <col width="194">
            <col width="148">
            <col width="42">
        </colgroup>
        <thead>
            <tr>
                <th>项目名称</th>
                <th>财务负责人</th>
                <th></th>
            </tr>
        <thead>
        <tbody>
            <?php 
            $personname=$_GET['person_name'];
            //$personname="dpl";
            $flag=0;
            $xml = new DOMDocument();
			$xml->load('../xml/m_managers.xml');
			$tempDom= $xml->getElementsByTagName("m_manager");
            foreach($tempDom as $temp)
			{  
				$tem=$temp->getElementsByTagName("pro_name")->item(0)->nodeValue;
				if($personname==($temp->getElementsByTagName("m_manager_name")->item(0)->nodeValue))
				{
					$flag=1;
			?>
					<tr>
	                <td><?php echo $tem?></td>
	                <td><?php echo $temp->getElementsByTagName("m_manager_name")->item(0)->nodeValue?></td>
	                <td><a href="../html4/default.php?name=<?php echo $tem?>">进入</a></td>
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