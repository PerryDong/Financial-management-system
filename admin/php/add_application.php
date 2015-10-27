<?php
//-----------------------上传文件-------------------------------------------------------
$size=1000000;
$path="../uploads";
$filepath='';
if($_FILES['up_myfile']['error']>0)
{
	$filepath="../html2/task.php";
}
else
{
	if($_FILES['up_myfile']['size']>$size)
	{
		die("超过允许的<b>{$size}</b>字节大小");
	}
	$filename=date("YmdHis").rand(100,999);
	if(is_uploaded_file($_FILES['up_myfile']['tmp_name']))
	{
		$filepath=$path.'/'.$filename;
		if(!move_uploaded_file($_FILES['up_myfile']['tmp_name'], $filepath))
		{
			die('不能移动到指定目录');
		}
	}
	else {
		die('文件不合法');
	}
}
//---------------------------记录申请----------------------------------------------------
$dom = new DomDocument();
$dom->load('../xml/applications.xml');
$applications = $dom->documentElement;//获得 XML结构的根
session_start();
$pname1=$_SESSION['pnam'];     	
$tname1=$_SESSION['tnam'];

$application = $dom->createElement('application');
$applications->appendChild($application);

$tem = $dom->createElement('application_pro');
$tem->appendChild($dom->createTextNode($pname1));
$application->appendChild($tem);

$tem = $dom->createElement('applications_task');
$tem->appendChild($dom->createTextNode($tname1));
$application->appendChild($tem);

$tem = $dom->createElement('application_taskper');
$tem->appendChild($dom->createTextNode($_POST['application_taskper']));
$application->appendChild($tem);

$tem = $dom->createElement('application_type');
$tem->appendChild($dom->createTextNode($_POST['application_type']));
$application->appendChild($tem);


$tem = $dom->createElement('application_date');
$tem->appendChild($dom->createTextNode($_POST['application_date']));
$application->appendChild($tem);

$tem = $dom->createElement('application_mount');
$tem->appendChild($dom->createTextNode($_POST['application_mount']));
$application->appendChild($tem);

$tem = $dom->createElement('m_manager_state');
$tem->appendChild($dom->createTextNode("未通过"));
$application->appendChild($tem);

$tem = $dom->createElement('pro_manager_state');
$tem->appendChild($dom->createTextNode("未通过"));
$application->appendChild($tem);

$tem = $dom->createElement('path');
$tem->appendChild($dom->createTextNode($filepath));
$application->appendChild($tem);

$fp = fopen("../xml/applications.xml", "w");
fwrite($fp, $dom->saveXML());
fclose($fp);
header("location:../html2/task.php");

?>
