<?php 

/*

	This is the databse class and perform all the operation of the crud
 
	class name: Database

 */ 


	class Database 
	{
		private $con;   						// connection variable
		private $server 	= "localhost";   	// server name
		private $username 	= "root";   		// username
		private $pass 		= "";   			// password
		private $database 	= "dummy";   		// database name


		function __construct()
		{
			// Here we are establishing  connection with databse
			$this->con = new mysqli($this->server, $this->username, $this->pass, $this->database);
			if($this->con) 
			{
				echo "connected"; 
			} else {
				echo "not connected";
			}
		}
	}
?>