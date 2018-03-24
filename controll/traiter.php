<?php session_start(); ?>
<?php
			require '../lib/Laine.class.php';
			require '../lib/Gestionbd.class.php';
			//$database = new Bd();
			//$database->connect();

				if(!isset($_POST['message']) )
				{
					header('Location: ../index.php');
				}else{

			$laine = new Laine();
			$laine->connect();
			$laine->talk(strtolower($_POST['message']),$_SESSION['pseudo']);
			header('Location: ../user/myspace.php');
		}
			

?>