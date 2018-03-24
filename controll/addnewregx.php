<?php
require '../lib/Laine.class.php';
require '../lib/Gestionbd.class.php';
$laine = new Laine();
$laine->connect();
	$var  = $_POST["word"];
	$resu =  "#^";
	$i    = 0;
	
		while( $i < strlen($var) )
			{
			if( $var[$i] =='a' || $var[$i] =='o' || $var[$i] =='i' || $var[$i] =='e' || $var[$i] =='u')
				{
					$resu .= "(a|o|i|u|e)";
					$resu .= "*";
					$i++;
				}
				else if( $var[$i] =='y' )
				{
					$resu .= "y*";
					$i++;
				}
				else if( ($var[$i] == 'c' || $var[$i] == 's' ) && $var[$i+1] == 'h' )
				{
					$resu .= "(c|s)+h+";
					$i += 2;
				}
				else
				{
					$resu .= $var[$i];
					$resu .= "+";
					$i++;

				}
		}
		$resu .= "[\?!]*$#";
$laine->learnNewRegx($resu,$_POST["word"]);
header('Location: ../admin/winteris.php');




?>