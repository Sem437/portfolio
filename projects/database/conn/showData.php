<?php

class showData extends getAllData
{

    private $htmlTable;

    public function displayData($stmt)
    {
        $htmlTable = "<table>" . 
        "<tr><th>ID</th>" .
        "<th>First name</th>" .
        "<th>Last name</th>" .
        "<th>Age</th>" . 
        "<th>Delete</th>" .
        "<th>Edit</th>" .
        "</tr>";

        while($row = $stmt->fetch(PDO::FETCH_ASSOC))	
        {
            $htmlTable .= "<tr>" .
            "<td>" . $row["id"] . "</td>" .
            "<td>" . $row["firstname"] . "</td>" .
            "<td>" . $row["lastname"] . "</td>" .
            "<td>" . $row["age"] . "</td>" .
            "<td><a href='delete/index.php?id=" . $row["id"] . "'>Delete</a></td>" .
            "<td><a href='update/index.php?id=" . $row["id"] . "'>Edit</a></td>";
        }

        $htmlTable .= "</table>";
        return $htmlTable;
    }
}
?>