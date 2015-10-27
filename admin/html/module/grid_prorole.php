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
                <th>项目负责人</th>
                <th></th>
            </tr>
        <thead>
        <tbody>
            <?php 
            $personname=$_GET['person_name'];
            //$personname="dpl";
            $xml = new DOMDocument();
            $flag=0;
			$xml->load('../xml/pro_managers.xml');
			$pro_managerDom= $xml->getElementsByTagName("pro_manager");
            foreach($pro_managerDom as $pro_manager)
			{  
				$tem=$pro_manager->getElementsByTagName("pro_name")->item(0)->nodeValue;
				if($personname==($pro_manager->getElementsByTagName("pro_manager_name")->item(0)->nodeValue))
				{
					$flag=1;
			?>
					<tr>
	                <td><?php echo $tem?></td>
	                <td><?php echo $pro_manager->getElementsByTagName("pro_manager_name")->item(0)->nodeValue?></td>
	                <td><a href="../html/default.php?name=<?php echo $tem;?>">进入</a></td>
	            	</tr>  
	           <?php }
	 	 	 }
	 	 	 if($flag==0)
	 	 	 {?>
	 	 	 <tr>
	                <td>无</td>
	                <td><?php echo $personname?></td>
	                <td><a href="../html/default.php?name=无">创建</a></td>
	            	</tr> 
	 	 	<?php }?>
        </tbody>
    </table>
</div>
