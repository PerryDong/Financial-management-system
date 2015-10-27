<div class="grid radius5">
    <table>
        <colgroup>
        	<col width="96">
            <col width="96">
            <col width="200">
        </colgroup>
        <thead>
            <tr>
            	<th>所在项目</th>
                <th>消息日期</th>
                <th>消息内容</th>
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
			$xml->load('../xml/messages.xml');
			$tempDom= $xml->getElementsByTagName("message");
            foreach($tempDom as $temp)
			{  
				$tem=$temp->getElementsByTagName("message_pro")->item(0)->nodeValue;
				$tem2=$temp->getElementsByTagName("message_taker")->item(0)->nodeValue;
				if(($tem==$pname1)&&(($tem2=="所有人")||($tem2=="课题负责人")))
				{
					$flag=1;
			?>
					<tr>
						                <td><?php echo $tem?></td>
	                <td><?php echo $temp->getElementsByTagName("message_date")->item(0)->nodeValue?></td>
	                <td><?php echo $temp->getElementsByTagName("content")->item(0)->nodeValue?></td>
	            	</tr>  
	           <?php }
	 	 	 }
	 	 	 if($flag==0)
	 	 	 {?>
	 	 	 	<tr>
	                <td></td>
	                <td></td>
	                <td></td>
	            	</tr> 
	 	 	 <?php }?>
        </tbody>
    </table>
</div>
