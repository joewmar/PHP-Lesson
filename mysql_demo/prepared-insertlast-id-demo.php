<?php
    require('open_connection.php');

    // ICreate SQL Template
    $strSQL = "INSERT INTO person(LastName, FirstName, Sex, Email)
                VALUES 
                (?, ?, ?, ?)

    ";

    // 
    if($stmt = mysqli_prepare($con, $strSQL)){
        //binding of variable to the prepared statement as parameters 
        mysqli_stmt_bind_param(
                                $stmt, 
                                "ssss", 
                                $lastname, 
                                $firstname, 
                                $sex, 
                                $email
                            );

        //Can put value the variable
        $lastname = "Umuzaki";
        $firstname = "Naruto";
        $sex = "Male";
        $email = "narutouzumaki@email.com";
        mysqli_stmt_execute($stmt);
        $lastInserstedID = mysqli_insert_id($con);
        echo 'The ID is: ' . $lastInserstedID . '<br>';

        $lastname = "Uchiha";
        $firstname = "Sasuke";
        $sex = "Male";
        $email = "sasukeuchiha@email.com";
        mysqli_stmt_execute($stmt);
        $lastInserstedID = mysqli_insert_id($con);
        echo 'The ID is: ' . $lastInserstedID . '<br>';

        $lastname = "Haruno";
        $firstname = "Sakura";
        $sex = "Female";
        $email = "sakuraharuno@email.com";
        mysqli_stmt_execute($stmt);
        $lastInserstedID = mysqli_insert_id($con);
        echo 'The ID is: ' . $lastInserstedID . '<br>';

        echo 'Record Successfully Added';
    }
    else{
        echo 'Error: Could not prepare query:' . $strSQL ;
    }
    
    mysqli_stmt_close($stmt);
    require('close_connection.php');
?>