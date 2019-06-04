<?php
class login
{
	//Atributo para conexión a SGBD
	private $pdo;

//Método de conexión a SGBD.
	public function __CONSTRUCT()
	{
		try
		{
			//$this->pdo = Database::Conectar();
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
 
}


?>