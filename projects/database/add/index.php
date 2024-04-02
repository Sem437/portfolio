<?php
include "Add.php";

if(isset($_POST['back']))
{   
    header("Location: ../index.php");
    exit();
}

if(isset($_POST['add']))
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];

    $add = new Add();
    $check = $add->checkInputs($firstname, $lastname, $age);
   
    if($check['success'] === true)
    {
        $add->addUser($firstname, $lastname, $age);
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
    <title>Add user</title>
    <link rel="stylesheet" href="../css/add/add.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <form method="POST">
        <h1>Add user</h1>
        <input type="text" name='firstname' class='inputs' placeholder='firstname' >
        <input type="text" name='lastname'  class='inputs' placeholder='lastname'>
        <input type="text" name='age'       class='inputs' placeholder='age'>
        <div id='errorMessage'>
            <?php
                if(isset($_GET["error"]))
                {
                    echo $_GET["error"];
                }
            ?>
        </div>
        <div id='footerForm'>
            <input type="submit" class='knop' name="back" value="back">
            <input type="submit" class='knop' name="add"  value="add">
        </div>
    </form>
</body>
</html>