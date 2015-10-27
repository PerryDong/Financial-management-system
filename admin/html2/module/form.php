<div class="commonform">
    <form action="" method="POST">
        <fieldset class="radius5">
            <div class="item">
                <?php
                session_start();
               	$pname1=$_GET['pname'];
               	$_SESSION['pnam']=$pname1;
               	$tname1=$_GET['tname'];
               	$_SESSION['tnam']=$tname1;
	            $flag=0;
	            //$personname="dpl";
	            $xml = new DOMDocument();
				$xml->load('../xml/tasks.xml');
				$tempDom= $xml->getElementsByTagName("task");
	            foreach($tempDom as $temp)
				{  
					$tem=$temp->getElementsByTagName("t_num")->item(0)->nodeValue;
					if($pname1==$tem)
					{
						if($tname1==$temp->getElementsByTagName("t_name")->item(0)->nodeValue)
						{
						echo '<p style="font-size:12pt;text-align:center">'."课题所属项目名称 ".$tem.'<p>';?>
			</div>
			<div class="item">
                <?php echo '<p style="font-size:12pt;text-align:center">'."课题名称 ".$_SESSION['tnam'].'<p>';?>
            </div>
			<div class="item">
                <?php echo '<p style="font-size:12pt;text-align:center">'."负责人 ".$temp->getElementsByTagName("t_person")->item(0)->nodeValue.'<p>';?>
            </div>
            <div class="item">
                <?php echo '<p style="font-size:12pt;text-align:center">'.$temp->getElementsByTagName("t_information")->item(0)->nodeValue.'<p>';?>
            </div>
				<?php }
					}
		 	 	}
					?>
            
        </fieldset>
    </form>
</div>
