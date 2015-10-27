<?php
//-----------------------上传日志-------------------------------------------------------
$size=1000000;
$path="../uploads";
$path="../uploads";
if($_FILES['up_myfile']['error']>0)
{
	$filepath="../html3/file-1.php";
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
$dom->load('../xml/diaries.xml');
$diaries = $dom->documentElement;//获得 XML结构的根
session_start();
$pname1=$_SESSION['pnam'];     	
$tname1=$_SESSION['tnam'];
//创建一个新 task节点
$diary = $dom->createElement('diary');
$diaries->appendChild($diary);

$tem = $dom->createElement('diary_pro');
$tem->appendChild($dom->createTextNode($pname1));
$diary->appendChild($tem);

$tem = $dom->createElement('diary_task');
$tem->appendChild($dom->createTextNode($tname1));
$diary->appendChild($tem);

$tem = $dom->createElement('text');
$tem->appendChild($dom->createTextNode($_POST['text']));
$diary->appendChild($tem);

$tem = $dom->createElement('path');
$tem->appendChild($dom->createTextNode(($filepath)));
$diary->appendChild($tem);

$fp = fopen("../xml/diaries.xml", "w");
fwrite($fp, $dom->saveXML());
fclose($fp);
header("location:../html3/file-1.php");

?>
