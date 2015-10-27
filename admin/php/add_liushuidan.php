<?php
//-----------------------上传文件-------------------------------------------------------
$size=1000000;
$path="../uploads";
$path="../uploads";
if($_FILES['up_myfile']['error']>0)
{
	$filepath="../html2/liushuidan.php";
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
$dom->load('../xml/liushuidans.xml');
$liushuidans = $dom->documentElement;//获得 XML结构的根
session_start();
$pname1=$_SESSION['pnam'];     	
$tname1=$_SESSION['tnam'];
//创建一个新 task节点
$liushuidan = $dom->createElement('liushuidan');
$liushuidans->appendChild($liushuidan);

$tem = $dom->createElement('application_pro');
$tem->appendChild($dom->createTextNode($pname1));
$liushuidan->appendChild($tem);

$tem = $dom->createElement('applications_task');
$tem->appendChild($dom->createTextNode($tname1));
$liushuidan->appendChild($tem);

$tem = $dom->createElement('application_taskper');
$tem->appendChild($dom->createTextNode($_POST['application_taskper']));
$liushuidan->appendChild($tem);

$tem = $dom->createElement('application_type');
$tem->appendChild($dom->createTextNode($_POST['application_type']));
$liushuidan->appendChild($tem);


$tem = $dom->createElement('application_date');
$tem->appendChild($dom->createTextNode($_POST['application_date']));
$liushuidan->appendChild($tem);

$tem = $dom->createElement('num');
$tem->appendChild($dom->createTextNode($_POST['num']));
$liushuidan->appendChild($tem);

$tem = $dom->createElement('mount');
$tem->appendChild($dom->createTextNode($_POST['mount']));
$liushuidan->appendChild($tem);

$tem = $dom->createElement('m_manager_state');
$tem->appendChild($dom->createTextNode("通过"));
$liushuidan->appendChild($tem);

$tem = $dom->createElement('pro_manager_state');
$tem->appendChild($dom->createTextNode("通过"));
$liushuidan->appendChild($tem);

$tem = $dom->createElement('path');
$tem->appendChild($dom->createTextNode(($filepath)));
$liushuidan->appendChild($tem);

$fp = fopen("../xml/liushuidans.xml", "w");
fwrite($fp, $dom->saveXML());
fclose($fp);
header("location:../html2/liushuidan.php");

?>
