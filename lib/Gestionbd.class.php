<?php
include_once "../database/database.config.php";
class Bd
{
	private $_bdd;

	public function connect()
	{
		  $BASE = new base();		  
		  $this->_bdd = $BASE->connect();
	}	

	public function insert($name,$message)
	{
			$q = $this->_bdd->prepare('INSERT INTO lainediscussion SET name = :name, message = :message ');
			$q->bindValue(':name',$name);
			$q->bindValue(':message',$message);
			$q->execute();
	}

	public function deleteall()
	{
		$q = $this->_bdd->prepare('TRUNCATE TABLE lainediscussion');
		$q->execute();
	}

	public function getData()
	{
			$q = $this->_bdd->query('SELECT name,message FROM lainediscussion ');
			//$data = $q->fetch(PDO::FETCH_ASSOC);
			return $q;
	}
	public function insertbackup($name,$message)
	{
			$q = $this->_bdd->prepare('INSERT INTO backupmessage SET name = :name, message = :message ');
			$q->bindValue(':name',$name);
			$q->bindValue(':message',$message);
			$q->execute();
	}
	public function getDataBackup()
	{
			$q = $this->_bdd->query('SELECT name,message FROM backupmessage ');
			//$data = $q->fetch(PDO::FETCH_ASSOC);
			return $q;
	}












}


?>