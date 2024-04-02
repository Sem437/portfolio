<?php
include "../conn/Conn.php";

class Delete
{
    public function deleteData($id)
    {
        try
        {
            $conn = new Conn();
            $conn->connect();

            $pdo = $conn->getPDO(); 

            $sql = "DELETE FROM persons WHERE id = $id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            if($stmt->rowCount() > 0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        catch(PDOException $e)
        {
            $this->error = $e->getMessage();
        }
    }

}
?>