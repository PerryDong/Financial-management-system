<div class="grid radius5">
    <table>
        <colgroup>
        	<col width="196">
            <col width="196">
        </colgroup>
        <thead>
            <tr>
            	<th>课题名</th>
                <th>日志</th>
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
			$xml->load('../xml/diaries.xml');
			$tempDom= $xml->getElementsByTagName("diary");
            foreach($tempDom as $temp)
			{  
				$tem=$temp->getElementsByTagName("diary_pro")->item(0)->nodeValue;
				$tem2=$temp->getElementsByTagName("diary_task")->item(0)->nodeValue;
				if(($tem==$pname1)&&$tem2==$tname1)
				{
					$flag=1;
			?>
					<tr>
	                <td><?php echo $tem2?></td>
	                <td><?php echo $temp->getElementsByTagName("text")->item(0)->nodeValue?></td>
	                 <td> <a href=<?php echo $temp->getElementsByTagName("path")->item(0)->nodeValue?>>下载附件</a></td>
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
        <tfoot>
            <tr>
                <td colspan="1" class="allbox">
                </td>
            </tr>
        </tfoot>
    </table>
</div>
