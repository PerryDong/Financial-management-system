<?php
$xml = new DOMDocument();
$xml->load('../xml/users.xml');
$userDom = $xml->getElementsByTagName("user");
foreach($userDom as $user)
{    
	if(isset($_POST['button']) and $_POST['button']=="登入" )
	{
		if(isset($_POST['username']) and $_POST['username']==($user->getElementsByTagName("username")->item(0)->nodeValue))
		{
			$a=$_POST['username'];
			if(isset($_POST['password']) and $_POST['password']==($user->getElementsByTagName("password")->item(0)->nodeValue))
			{
				header("location:../html/role.php?person_name=$a");
			}
			else
			{
				echo '<script>alert("password wrong!");</script>';
			}
		}
	}
}
?>
