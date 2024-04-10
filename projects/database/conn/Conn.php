<?php

class Conn
{
    private $dbINI;
    private $dbHost;
    private $dbUser;
    private $dbPass;
    private $dbName;
    protected $conn;

   public function __construct()
   {
       $this->dbHost = ""; //mijn host
       $this->dbUser = ""; //mijn gebruikersnaam
       $this->dbPass = ""; //mijn wachtwoord
       $this->dbName = ""; //mijn database
   }

   public function connect()
   {
        try
       {
           $this->conn = new PDO("mysql:host=$this->dbHost;dbname=$this->dbName", $this->dbUser, $this->dbPass);
        //    echo "Connection successful";
           return $this->conn;
       }
       catch(PDOException $e)
       {
            throw new Exception("Connection failed: " . $e->getMessage());
       }
   }

   public function getPDO()
   {
        return $this->conn;
   }
}

?>