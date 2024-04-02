<?php
include "../conn/Conn.php";

class Update
{
   public function updateData($id, $firstname, $lastname, $age)
    {
        $conn = new Conn();
        $pdo = $conn->connect();
        
        $sql = "UPDATE persons SET firstname = '$firstname', lastname = '$lastname', age = '$age' WHERE id = $id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    }

    public function showFn($id)
    {
        $conn = new Conn();
        $pdo = $conn->connect();

        $sql = "SELECT firstname FROM persons WHERE id = $id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data["firstname"];
    }

    public function showLn($id)
    {
        $conn = new Conn();
        $pdo = $conn->connect();

        $sql = "SELECT lastname FROM persons WHERE id = $id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data["lastname"];
    }

    public function showAge($id)
    {
        $conn = new Conn();
        $pdo = $conn->connect();

        $sql = "SELECT age FROM persons WHERE id = $id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data["age"];
    }
}

?>