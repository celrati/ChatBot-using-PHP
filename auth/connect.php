<?php
require '../lib/member.class.php';
$m = new Member;
$m->connect();


if(!isset($_POST['pseudo']) || !isset($_POST['password']))
{
	echo "error ";
	header('Location: ../index.php');
}



if(!$m->exist($_POST['pseudo'],$_POST['password']))
{
	if($_POST['pseudo'] == "maiden" && $_POST['password'] == 123 )
	{
		session_start();
		$_SESSION['pseudo']   = "maiden";
		header('Location: ../admin/winteris.php');}
		else
			{header('Location: ../index.php');}
		
	}
	if($m->exist($_POST['pseudo'],$_POST['password']))
	{  

		session_start();
		$_SESSION['pseudo']   = $_POST['pseudo'];
		header('Location: ../user/myspace.php');
	}

	?>