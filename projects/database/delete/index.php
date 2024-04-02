<?php
include "Delete.php";

$id = isset($_GET["id"]) ? $_GET["id"] : "";

if($id !== null)
{
    $delete = new Delete();

    if(isset($_POST["back"]))
    {
        header("Location: ../index.php");
        exit();
    }

    if(isset($_POST["delete"]))
    {
        $delete->deleteData($id);
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
    <title>Delete</title>
    <link rel="stylesheet" href="../css/delete/delete.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <form method="post">
        <h1>Are you sure you want to delete this data</h1>
        <div>
            <div>
                <input type="submit" name="back"   class="knoppen" value="Back">
            </div>
            <div>
                <input type="submit" name="delete" class="knoppen" value="Delete">
            </div>
        </div>
    </form>
    <script>
        document.getElementById("no").checked = true;
    </script>
</body>
</html>