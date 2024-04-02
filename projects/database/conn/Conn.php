<?php

class Conn
{
    private $dbINI;
    private $dbHost;
    private $dbUser;
    private $dbPass;
    private $dbName;
    protected $pdo;

   public function __construct()
   {
       $this->dbINI = parse_ini_file("conn.ini");
       $this->dbHost = $this->dbINI["host"];
       $this->dbUser = $this->dbINI["username"];
       $this->dbPass = $this->dbINI["password"];
       $this->dbName = $this->dbINI["dbname"];
   } 

   public function connect()
   {
        try
       {
           $conn = "mysql:host=$this->dbHost;dbname=$this->dbName";
           $this->pdo = new PDO($conn, $this->dbUser, $this->dbPass);
           $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           return $this->pdo;
       }
       catch(PDOException $e)
       {
           $this->error = $e->getMessage();
       }
   }

   public function getPDO()
   {
        return $this->pdo;
   }
}

?>