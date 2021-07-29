<?php

namespace Services;
use Core\Connection;
use \PDO;

class ContactService {
	private $conn;
    private $driver = DRIVER;
    private $host = HOST;
    private $dbname = DBNAME;
    private $user = USER;
    private $pass = PASS;
	
	public function __construct() {
		try {
			$this->conn = new PDO($this->driver.':dbname='.$this->dbname, $this->user, $this->pass);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			echo "Error: ".$e->getMessage();
		}
	}
	
	public function store($data = []) { 
		if (!empty($data)) {
            extract($data);
            try {
                $query = "INSERT INTO contacts (name, email, subject, message) VALUES (:name, :email, :subject, :message)";
                $stmt = $this->conn->prepare($query);
                $stmt->bindValue(":name", $name, PDO::PARAM_STR);
                $stmt->bindValue(":email", $email, PDO::PARAM_STR);
                $stmt->bindValue(":subject", $subject, PDO::PARAM_STR);
                $stmt->bindValue(":message", $message, PDO::PARAM_STR);
                $stmt->execute();

                return true;
            } catch (PDOException $e) {
                return false;
            }
		} else {
			return false;
		}
	}
}

