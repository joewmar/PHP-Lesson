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
        $lastname = "Recelestino";
        $firstname = "Juan Pedro";
        $sex = "Male";
        $email = "juanpedro@email.com";
        mysqli_stmt_execute($stmt);

        $lastname = "Manaloto";
        $firstname = "Pepito";
        $sex = "Male";
        $email = "pepitomanaloto@email.com";
        mysqli_stmt_execute($stmt);

        echo 'Record Successfully Added';
    }
    else{
        echo 'Error: Could not prepare query:' . $strSQL ;
    }
    
    mysqli_stmt_close();
    require('close_connection.php');
?>