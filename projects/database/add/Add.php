<?php

include "../conn/Conn.php";

class Add
{
    public function addUser($firstname, $lastname, $age)
    {
        try
        {
            $conn = new Conn();
            $conn->connect();

            $check = $this->checkInputs($firstname, $lastname, $age);

            if($check["success"] === true)
            {
                $pdo = $conn->getPDO();
                $sql = "INSERT INTO persons (firstname, lastname, age) VALUES (:firstname, :lastname, :age)";
                $stmt = $pdo->prepare($sql);

                $stmt->bindParam(":firstname", $firstname);
                $stmt->bindParam(":lastname",  $lastname);
                $stmt->bindParam(":age",       $age);

    
                $stmt->execute();
            }
            else
            {
                $errorMessage = $check["errorMessage"];
                header("Location: index.php?error=" . urlencode($errorMessage));
                exit();
            }
        }
        catch(PDOException $e)
        {
            $this->error = $e->getMessage();
        }
    }

    public function checkInputs($firstname, $lastname, $age)
    {

        if(empty($firstname) || empty($lastname) || empty($age))
        {
            $errorMessage = "All fields are required";
            header("Location: index.php?error=" . urlencode($errorMessage));
            exit();
        }
        elseif(is_numeric($firstname) || is_numeric($lastname) || !is_numeric($age))
        {
            $errorMessage = "Invalid input";
            header("Location: index.php?error=" . urlencode($errorMessage));
            exit();
        }
        else
        {
            return [
                "success"       => true,
                "errorMessage"  => "ohh no, something went wrong!"
            ];
        }

    }
    
}

?>
