<?php

class showData extends getAllData
{

    private $htmlTable;

    public function displayData($data)
    {
        $htmlTable = "<table>" . 
        "<tr><th>ID</th>" .
        "<th>First name</th>" .
        "<th>Last name</th>" .
        "<th>Age</th>" . 
        "<th>Delete</th>" .
        "<th>Edit</th>" .
        "</tr>";

        foreach($data as $row) 
        {
            $htmlTable .=
            "<tr><td>" . $row['id'] . "</td><td>" . 
            $row['firstname'] . "</td><td>" . 
            $row['lastname'] . "</td><td>" . 
            $row['age'] . "</td>" . 
            "<td id='delete'><a href='../database/delete/index.php?id=" . $row['id'] . "'>  <i class='fas fa-trash'>     </i> </a></td>" .
            "<td id='update'><a href='../database/update/index.php?id=" . $row['id'] . "'>  <i class='fas fa-user-edit'> </i> </a></td>" .
            
            "</tr>";
        }

        $htmlTable .= "</table>";
        return $htmlTable;
    }
}