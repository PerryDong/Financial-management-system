<?php
$size=1000000;
$path="../uploads";
if($_FILES['up_myfile']['error']>0)
{
	echo 'upload error';
}
if($_FILES['up_myfile']['size']>$size)
{
	die("超过允许的<b>{$size}</b>字节大小");
}
$filename=date("YmdHis").rand(100,999);
if(is_uploaded_file($_FILES['up_myfile']['tmp_name']))
{
	if(!move_uploaded_file($_FILES['up_myfile']['tmp_name'], $path.'/'.$filename))
	{
		die('不能移动到指定目录');
	}
}
else {
	die('文件不合法');
}
echo 'ss';
?>