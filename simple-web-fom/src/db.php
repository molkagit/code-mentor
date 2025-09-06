<?php
//to create an actual database
class DATABASE {
     private $pdo;
     public function __construct(){
        $host="localhost";
        $dbname="namedb";
        $username="root";
        $password="";
        try {
	$this->pdo = new PDO ('mysql:host=$host;dbname=$dbname;charset=utf8', $username, $password);
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	die('Erreur : ' . $e->getMessage());
	
}
     }
    public function getConnexion():PDO{
        return $this->pdo;
    }
}
?>