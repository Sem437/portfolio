<?php

class getAllData extends Conn
{
   public function fetchData()
   {
       $this->connect();

       $sql = "SELECT * FROM persons";
       $stmt = $this->pdo->query($sql);
       $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
       return $data;
   }
}

?>