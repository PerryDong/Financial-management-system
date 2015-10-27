<?php 
session_start();
$dom = new DomDocument();
$dom->load('../xml/takers.xml');
$tasks = $dom->documentElement;//获得 XML结构的根
$tempDom= $dom->getElementsByTagName("taker");
$selects=$_POST['select'];
foreach($selects as $ss)
{
	echo $ss;
	foreach($tempDom as $temp)
	{  
		$tem=$temp->getElementsByTagName("taker_pro")->item(0)->nodeValue;
		$tem2=$temp->getElementsByTagName("taker_task")->item(0)->nodeValue;
		$tem3=$temp->getElementsByTagName("taker_name")->item(0)->nodeValue;
		if(($tem==$_SESSION['pnam'])&&($tem3==$ss)&&($tem2==$_SESSION['tnam']))
		{
			$tasks->removeChild($temp);
		}
	}
}
$fp = fopen("../xml/takers.xml", "w");
fwrite($fp, $dom->saveXML());
fclose($fp);
header("location:../html2/dele.php");
?>