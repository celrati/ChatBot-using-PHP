

<?php

include_once "../database/database.config.php";
class Member
{
		private $_bdd;

		public function connect()
			{
		    
				$BASE = new base();		  
		 		 $this->_bdd = $BASE->connect();
			}
		public function insert($pseudo,$email,$password)
			{
			$q = $this->_bdd->prepare('INSERT INTO member SET pseudo = :pseudo, email = :email, password =:password ');
			$q->bindValue(':pseudo',$pseudo);
			$q->bindValue(':email',$email);
			$q->bindValue(':password',$password);
			$q->execute();
			}

	public function deleteall()
			{
				$q = $this->_bdd->prepare('TRUNCATE TABLE member');
				$q->execute();
			}

	public function exist($pseudo,$password)
	{
			$req= $this->_bdd->prepare('SELECT id FROM member WHERE pseudo = :pseudo AND password = :password');
			$req->bindValue(':pseudo',$pseudo);
			$req->bindValue(':password',$password);
			$req->execute();
			$resu = $req->fetch();
			if(!$resu) return false;
			return true;

	}
	public function existfull($pseudo,$password,$email)
	{
			$req= $this->_bdd->prepare('SELECT id FROM member WHERE pseudo = :pseudo AND password = :password AND email = :email');
			$req->bindValue(':pseudo',$pseudo);
			$req->bindValue(':email',$email);
			$req->bindValue(':password',$password);
			$req->execute();
			$resu = $req->fetch();
			if(!$resu) return false;
			return true;

	}

	public function getMembreAll()
	{
		$q = $this->_bdd->query('SELECT pseudo,email,password FROM member ');
		return $q;
	}


}
?>
