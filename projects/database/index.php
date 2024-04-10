<?php
include "conn/Conn.php";
include "conn/getAllData.php";
include "conn/showData.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <link rel="stylesheet" href="css/mainStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6ca25e02dc.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Users</h1>
    <a href="add/index.php">add user</i></a>
    <?php
        $database = new Conn();
        $pdo = $database->connect();
        
        $getAllData = new getAllData();
        $stmt = $getAllData->fetchData();
        
        $dt = new showData();
        echo $dt->displayData($stmt);
    ?>
</body>
</html>