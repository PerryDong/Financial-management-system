<div class="commonform">
    <form action="?" method="POST">
        <fieldset class="radius5">
            <legend>基本信息</legend>
            <div class="item">
                <?php
                session_start();
               	$name=$_GET['name'];
               	$_SESSION['nam']=$name;
	            $flag=0;
	            //$personname="dpl";
	            $xml = new DOMDocument();
				$xml->load('../xml/projects.xml');
				$tempDom= $xml->getElementsByTagName("project");
	            foreach($tempDom as $temp)
				{  
					$tem=$temp->getElementsByTagName("pro_name")->item(0)->nodeValue;
					if($name==$tem)
					{
						echo '<p style="font-size:12pt;text-align:center">'."名称 ".$tem.'<p>';?>
			</div>
			<div class="item">
                <?php echo '<p style="font-size:12pt;text-align:center">'."编号 ".$temp->getElementsByTagName("pro_num")->item(0)->nodeValue.'<p>';?>
            </div>
			<div class="item">
                <?php echo '<p style="font-size:12pt;text-align:center">'."负责人 ".$temp->getElementsByTagName("pro_person")->item(0)->nodeValue.'<p>';?>
            </div>
            <div class="item">
                <?php echo '<p style="font-size:12pt;text-align:center">'.$temp->getElementsByTagName("pro_information")->item(0)->nodeValue.'<p>';?>
            </div>
				<?php }
		 	 	}
					?>
            
            
        </fieldset>
    </form>
</div>
