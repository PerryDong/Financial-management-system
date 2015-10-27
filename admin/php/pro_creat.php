<?php
$dom = new DomDocument();
$dom->load('../xml/projects.xml');
$projects = $dom->documentElement;//获得 XML结构的根
//创建一个新 project节点
$project = $dom->createElement('project');
$projects->appendChild($project);
//在新的 节点上创建 pro_num标签
$pro_num = $dom->createElement('pro_num');
$pro_num->appendChild($dom->createTextNode($_POST['num_pro']));
$project->appendChild($pro_num);

$pro_name = $dom->createElement('pro_name');
$pro_name->appendChild($dom->createTextNode($_POST['name_pro']));
$project->appendChild($pro_name);

$pro_person = $dom->createElement('pro_person');
$pro_person->appendChild($dom->createTextNode($_POST['person_pro']));
$project->appendChild($pro_person);

$pro_information = $dom->createElement('pro_information');
$pro_information->appendChild($dom->createTextNode($_POST['information_pro']));
$project->appendChild($pro_information);

$fp = fopen("../xml/projects.xml", "w");
fwrite($fp, $dom->saveXML());
fclose($fp);
//-----------------------------------------------------------------------------------------
$dom2 = new DomDocument();
$dom2->load('../xml/pro_managers.xml');
$pro_managers = $dom2->documentElement;
$pro_manager = $dom2->createElement('pro_manager');
$pro_managers->appendChild($pro_manager);

$pro_manager_name = $dom2->createElement('pro_manager_name');
$pro_manager_name->appendChild($dom2->createTextNode($_POST['person_pro']));
$pro_manager->appendChild($pro_manager_name);

$pro_name2=$dom2->createElement('pro_name');
$pro_name2->appendChild($dom2->createTextNode($_POST['name_pro']));
$pro_manager->appendChild($pro_name2);

$fp2 = fopen("../xml/pro_managers.xml", "w");
fwrite($fp2, $dom2->saveXML());
fclose($fp2);
//-----------------------------------------------------------------------------------------
$dom3 = new DomDocument();
$dom3->load('../xml/m_managers.xml');
$m_managers = $dom3->documentElement;
$m_manager = $dom3->createElement('m_manager');
$m_managers->appendChild($m_manager);

$m_manager_name = $dom3->createElement('m_manager_name');
$m_manager_name->appendChild($dom3->createTextNode($_POST['m_person_pro']));
$m_manager->appendChild($m_manager_name);

$pro_name3=$dom3->createElement('pro_name');
$pro_name3->appendChild($dom3->createTextNode($_POST['name_pro']));
$m_manager->appendChild($pro_name3);

$fp3 = fopen("../xml/m_managers.xml", "w");
fwrite($fp3, $dom3->saveXML());
fclose($fp3);

header("location:../html/page_t.php");

?>