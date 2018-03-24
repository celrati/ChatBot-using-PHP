<?php
//require 'Gestionbd.class.php';
//require "../database/database.config.php";
class Laine
{
		private $_name = "Laine";
		private $_age  = 20;
		private $_bdd;
		private $_Happy;
		private $_Sad;
		private $_Angry;
		private $_Love;
		

		public function getHappy() { return $this->_Happy ; }
		public function getSad() { return $this->_Sad ; }
		public function getAngry() { return $this->_Angry ; }
		public function getLove() { return $this->_Love ; }

		public function setfeelings($happy,$sad,$angry,$love)
		{
					$b = $this->_bdd->prepare('TRUNCATE TABLE feelings');
					$b->execute();
			$q = $this->_bdd->prepare('INSERT INTO feelings SET h = :h, s = :s, a = :a, l = :l');
					$q->bindValue(':h',$happy,PDO::PARAM_INT);
					$q->bindValue(':s',$sad,PDO::PARAM_INT);
					$q->bindValue(':a',$angry,PDO::PARAM_INT);
					$q->bindValue(':l',$love,PDO::PARAM_INT);
					$q->execute();

		}
		public function getfeelings()
		{
			$q = $this->_bdd->query('SELECT h,s,a,l FROM feelings ');
			$a = $q->fetch();
			$this->_Happy = $a['h'];
			$this->_Sad = $a['s'];
			$this->_Angry = $a['a'];
			$this->_Love = $a['l'];


		}

		public function __construct()
		{
		$this->_Happy = 0;$this->_Sad = 0;$this->_Angry = 0;$this->_Love = 0;
		}


		public function connect()
		{
				$BASE = new base();		  
				  $this->_bdd = $BASE->connect();

		}
		public function getName() { return $this->_name; }
		public function getAge()  { return $this->_age ; }
	    public function learn($question,$answer)
	    {
	    			$q = $this->_bdd->prepare('INSERT INTO lainelearn SET question = :question, answer = :answer');
					$q->bindValue(':question',$question);
					$q->bindValue(':answer',$answer);
					$q->execute();
	    }
	    public function deleteall()
	    {
	    	$q = $this->_bdd->prepare('TRUNCATE TABLE lainelearn');
			$q->execute();
	    }
	    public function getData()
	    {
	    	$q = $this->_bdd->query('SELECT question,answer FROM lainelearn ');
			return $q;
	    }
	    public function getAnswer($que)
	    {
	    	$q = $this->_bdd->query('SELECT answer FROM lainelearn WHERE question =\''. $que . '\'');
	    	//$a = $q->fetch();
	    	return $q;
	    }
	    public function talk($message,$addressIp)
	    {

	    	$database = new Bd();
			$database->connect();
			$phrase  = $message;
			$phrase1 = explode(" ",$phrase);
			$phraseresu = "";
			foreach($phrase1 as $mot)
			{
				$answer = $this->getAnswer($this->getRightWord($mot));
				$answer1 = $answer->fetch();

				
			    if(!$answer1)
				{
					$phraseresu .= " kifash!? "; 
				}
				else
				{
					$phraseresu .= " ".$answer1['answer'];
				}
				//echo "a".$mot;
			}
			$database->deleteall();
			$database->insertbackup($addressIp,$message);
			$database->insertbackup($this->getName(),$phraseresu);
			$database->insert($addressIp,$message);
			$database->insert($this->getName(),$phraseresu);
	    }

	    public function GetRightWord($word) 
	    {
	    	$q = $this->_bdd->query('SELECT regx,word FROM laineregx');
	    	
	    	while($b = $q->fetch())
	    	{
	    		if(preg_match($b['regx'],$word))
	    		{
	    			return $b['word'];
	    		}
	    	}
	    	return "wxw";
		 }     //selam <==> #salam# return salam

		 public function learnNewRegx($regx,$word)
		 {
		 	$q = $this->_bdd->prepare('INSERT INTO laineregx SET regx = :regx, word = :word');
			$q->bindValue(':regx',$regx);
			$q->bindValue(':word',$word);
			$q->execute();
		 }









}






?>