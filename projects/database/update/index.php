<?php
include "Update.php";

$id = isset($_GET["id"]) ? $_GET["id"] : "";

if($id !== null)
{
    $update = new Update();

    if(isset($_POST["update"]))
    {
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $age = $_POST["age"];
        $update->updateData($id, $firstname, $lastname, $age);
        
        header("Location: ../index.php");
        exit();
    }

    if(isset($_POST["back"]))
    {
        header("Location: ../index.php");
        exit();
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link rel="stylesheet" href="../css/update/update.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <form method="POST">
        <h1>Update</h1>
       <div id="formHead">
            <input type="text" class="input"  name="firstname" value="<?= $update->showFn($id); ?>">
            <input type="text" class="input"  name="lastname"  value="<?= $update->showLn($id); ?>">
            <input type="text" class="input"  name="age"       value="<?= $update->showAge($id); ?>">
       </div>
       <div id="footerForm">
            <input type="submit" name="back"   value="Back"   class="knop">
            <input type="submit" name="update" value="Update" class="knop">
       </div>
    </form>
</body>
</html>