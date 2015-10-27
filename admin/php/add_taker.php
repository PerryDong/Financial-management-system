<?php
$dom = new DomDocument();
//记录参与人员信息
$dom->load('../xml/takers.xml');
$takers = $dom->documentElement;//获得 XML结构的根
session_start();
$pname1=$_SESSION['pnam'];     	
$tname1=$_SESSION['tnam'];
//创建一个新 task节点
$taker = $dom->createElement('taker');
$takers->appendChild($taker);

$tem = $dom->createElement('taker_pro');
$tem->appendChild($dom->createTextNode($pname1));
$taker->appendChild($tem);

$tem = $dom->createElement('taker_task');
$tem->appendChild($dom->createTextNode($tname1));
$taker->appendChild($tem);

$tem = $dom->createElement('taker_name');
$tem->appendChild($dom->createTextNode($_POST['taker_name']));
$taker->appendChild($tem);

$tem = $dom->createElement('taker_sex');
$tem->appendChild($dom->createTextNode($_POST['taker_sex']));
$taker->appendChild($tem);


$tem = $dom->createElement('taker_id');
$tem->appendChild($dom->createTextNode($_POST['taker_id']));
$taker->appendChild($tem);

$fp = fopen("../xml/takers.xml", "w");
fwrite($fp, $dom->saveXML());
fclose($fp);

//-----------------------------------------------------------------------------------------
//将信息添加到登录选择界面
$dom2 = new DomDocument();
$dom2->load('../xml/t_takers.xml');
$t_takers = $dom2->documentElement;
$t_taker = $dom2->createElement('t_taker');
$t_takers->appendChild($t_taker);

$tem = $dom2->createElement('taker_pro');
$tem->appendChild($dom2->createTextNode($pname1));
$t_taker->appendChild($tem);

$tem = $dom2->createElement('t_name');
$tem->appendChild($dom2->createTextNode($tname1));
$t_taker->appendChild($tem);

$tem = $dom2->createElement('t_taker_name');
$tem->appendChild($dom2->createTextNode($_POST['taker_name']));
$t_taker->appendChild($tem);

$fp2 = fopen("../xml/t_takers.xml", "w");
fwrite($fp2, $dom2->saveXML());
fclose($fp2);
header("location:../html2/managepeople.php");

?>
