<?php
    require('open_connection.php');

    // Inserting single row
    // $strSQL = "INSERT INTO person(LastName, FirstName, Sex, Email)
    //             VALUES ('Capiz', 'Raechell Anne', 'Female', 'rechellannecapiz@email.com')
    
    // ";

    // Inserting Multiple Rows
    $strSQL = "INSERT INTO person(LastName, FirstName, Sex, Email)
                VALUES 
                ('Samson', 'Tom', 'Male', 'sirtom@email.com'),
                ('Sanchez', 'Carolina', 'Female', 'doccalolina@email.com'),
                ('Dumlao', 'Wendel', 'Male', 'sirwendel@email.com')

    ";

    if(mysqli_query($con, $strSQL))
        echo 'Record Successfully Added';
    else
        echo 'Error: Failed SQL';

    require('close_connection.php');
?>