<?php
$dom = new DomDocument();
$dom->load('../xml/tasks.xml');
$tasks = $dom->documentElement;//获得 XML结构的根
//创建一个新 task节点
$task = $dom->createElement('task');
$tasks->appendChild($task);

$t_num = $dom->createElement('t_num');
$t_num->appendChild($dom->createTextNode($_POST['num_t']));
$task->appendChild($t_num);

$t_name = $dom->createElement('t_name');
$t_name->appendChild($dom->createTextNode($_POST['name_t']));
$task->appendChild($t_name);

$t_person = $dom->createElement('t_person');
$t_person->appendChild($dom->createTextNode($_POST['person_t']));
$task->appendChild($t_person);

$t_information = $dom->createElement('t_information');
$t_information->appendChild($dom->createTextNode($_POST['information_t']));
$task->appendChild($t_information);

$book_m = $dom->createElement('book_m');
$book_m->appendChild($dom->createTextNode($_POST['book_m']));
$task->appendChild($book_m);

$train_m = $dom->createElement('train_m');
$train_m->appendChild($dom->createTextNode($_POST['train_m']));
$task->appendChild($train_m);

$hardware_m = $dom->createElement('hardware_m');
$hardware_m->appendChild($dom->createTextNode($_POST['hardware_m']));
$task->appendChild($hardware_m);

$other_m = $dom->createElement('other_m');
$other_m->appendChild($dom->createTextNode($_POST['other_m']));
$task->appendChild($other_m);

$fp = fopen("../xml/tasks.xml", "w");
fwrite($fp, $dom->saveXML());
fclose($fp);

//-----------------------------------------------------------------------------------------
$dom2 = new DomDocument();
$dom2->load('../xml/t_managers.xml');
$t_managers = $dom2->documentElement;
$t_manager = $dom2->createElement('t_manager');
$t_managers->appendChild($t_manager);

$t_manager_name = $dom2->createElement('t_manager_name');
$t_manager_name->appendChild($dom2->createTextNode($_POST['person_t']));
$t_manager->appendChild($t_manager_name);

$pro_name2=$dom2->createElement('pro_name');
$pro_name2->appendChild($dom2->createTextNode($_POST['num_t']));
$t_manager->appendChild($pro_name2);

$t_name2=$dom2->createElement('t_name');
$t_name2->appendChild($dom2->createTextNode($_POST['name_t']));
$t_manager->appendChild($t_name2);

$fp2 = fopen("../xml/t_managers.xml", "w");
fwrite($fp2, $dom2->saveXML());
fclose($fp2);
header("location:../html/page_t.php");

?>
