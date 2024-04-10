<?php

class getAllData extends Conn
{
   public function fetchData()
   {
       $this->connect();

        return $this->getPDO()->query( "SELECT * FROM persons");
   }
}

?>