<?php

class Dao {
	private $host ="us-cdbr-iron-east-05.cleardb.net";
	private $db ="heroku_5346190efdce863";
	private $user ="b8466cae527cb9";
	private $pass ="245049d3";
	public function getConnection() {
		return
			new PDO("mysql:host={$this->host};dbname={$this->db}", $username, $password);
			//new PDO("mysql:dbname=$db;host=$host", $username, $password);
	}
	
}

