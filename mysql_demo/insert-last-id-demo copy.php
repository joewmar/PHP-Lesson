<?php
    require('open_connection.php');

    $strSQL = "INSERT INTO person(LastName, FirstName, Sex, Email)
                VALUES 
                ('Iscariot', 'Judas', 'Male', 'judasiscariot@email.com')

    ";

    if(mysqli_query($con, $strSQL)){
        echo 'Record Successfully Added<br>';
        $lastInserstedID = mysqli_insert_id($con);
        echo 'The ID is: ' . $lastInserstedID;
    }

    else
        echo 'Error: Failed SQL';

    require('close_connection.php');
?>