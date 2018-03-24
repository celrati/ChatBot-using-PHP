<?php

class base
{

	private $_bdd;
	////////////////////////////////////////:
	private $_host       = "######";   //
	private $_table      = "#####";        //
	private $_user        = "######";        //
	private $_password   = "#####";//
	////////////////////////////////////////:
	public function connect()
	{
		try
		{
			$this->_bdd=new PDO('mysql:host='.$this->_host.';dbname='.$this->_table, $this->_user, $this->_password);
		}

		catch(Exception $e)
		{
			die('Erreur : '.$e->getMessage());
		}
		return $this->_bdd;
	}	
}






























?>
