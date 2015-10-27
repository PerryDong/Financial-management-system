<?php
if(isset($_POST['button']) and $_POST['button']=="通过" )
{
	session_start();
	$dom = new DomDocument();
	$dom->load('../xml/applications.xml');
	$tasks = $dom->documentElement;//获得 XML结构的根
	$tempDom= $dom->getElementsByTagName("application");
	$selects=$_POST['select'];
	foreach($selects as $ss)
	{
		foreach($tempDom as $temp)
		{  
			$tem=$temp->getElementsByTagName("applications_task")->item(0)->nodeValue;
			$tem2=$temp->getElementsByTagName("application_type")->item(0)->nodeValue;
			$tem3=$temp->getElementsByTagName("application_date")->item(0)->nodeValue;
			$tem4=$temp->getElementsByTagName("application_pro")->item(0)->nodeValue;
			if(($tem4==$_SESSION['nam'])&&((($tem).($tem2).($tem3))==$ss))
			{
				$temp->getElementsByTagName("m_manager_state")->item(0)->nodeValue="通过";
			}
		}
	}
	$fp = fopen("../xml/applications.xml", "w");
	fwrite($fp, $dom->saveXML());
	fclose($fp);
	header("location:../html4/application.php");
}
if(isset($_POST['button2']) and $_POST['button2']=="删除" )
{
	session_start();
	$dom = new DomDocument();
	$dom->load('../xml/applications.xml');
	$applications = $dom->documentElement;//获得 XML结构的根
	$tempDom= $dom->getElementsByTagName("application");
	$selects=$_POST['select'];
	foreach($selects as $ss)
	{
		foreach($tempDom as $temp)
		{  
			$tem=$temp->getElementsByTagName("applications_task")->item(0)->nodeValue;
			$tem2=$temp->getElementsByTagName("application_type")->item(0)->nodeValue;
			$tem3=$temp->getElementsByTagName("application_date")->item(0)->nodeValue;
			$tem4=$temp->getElementsByTagName("application_pro")->item(0)->nodeValue;
			if(($tem4==$_SESSION['nam'])&&((($tem).($tem2).($tem3))==$ss))
			{
				$applications->removeChild($temp);
			}
		}
	}
	$fp = fopen("../xml/applications.xml", "w");
	fwrite($fp, $dom->saveXML());
	fclose($fp);
	header("location:../html4/application.php");
}
?>