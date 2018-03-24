<?php
require '../lib/member.class.php';
$m = new Member;
$m->connect();


if(!isset($_POST['pseudo']) || !isset($_POST['password']) || !isset($_POST['email']))
{
	echo "error !!! ";
	header('Location: ../index.php');
}

if($m->existfull($_POST['pseudo'],$_POST['password'],$_POST['email'])) { header('Location: ../index.php'); }


if(!$m->existfull($_POST['pseudo'],$_POST['password'],$_POST['email']))
{
	$m = new Member;
	$m->connect();
	$m->insert($_POST['pseudo'],$_POST['email'],$_POST['password']);
	session_start();
	$_SESSION['pseudo']   = $_POST['pseudo'];
	$_SESSION['email']    = $_POST['email'];
	$_SESSION['password'] = $_POST['password'];
	header('Location: ../user/myspace.php');
}







?>