<?php
session_start();
$dom = new DomDocument();
$dom->load('../xml/messages.xml');
$messages = $dom->documentElement;//获得 XML结构的根
$selects=$_POST['select'];

$message = $dom->createElement('message');
$messages->appendChild($message);

$tem = $dom->createElement('message_pro');
$tem->appendChild($dom->createTextNode($_SESSION['nam']));
$message->appendChild($tem);
$tem = $dom->createElement('message_taker');
$tem->appendChild($dom->createTextNode($selects));
$message->appendChild($tem);
$tem = $dom->createElement('message_date');
$tem->appendChild($dom->createTextNode(date("Y年m月d日",time())));
$message->appendChild($tem);
$tem = $dom->createElement('content');
$tem->appendChild($dom->createTextNode($_POST['name']));
$message->appendChild($tem);

$fp = fopen("../xml/messages.xml", "w");
fwrite($fp, $dom->saveXML());
fclose($fp);
header("location:../html/message.php");

?>