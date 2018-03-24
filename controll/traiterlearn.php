<?php
			require '../lib/Laine.class.php';
			require '../lib/Gestionbd.class.php';
			$_SESSION['a'] = 1;

			$a = new Laine();
			$a->connect();
			$a->learn($_POST['texting'],$_POST['nom']);
			
			header('Location: ../admin/winteris.php');
			

?>