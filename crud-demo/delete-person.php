<?php
    if(isset($_GET['k'])){
        require('functions.php');
        $con = openConnection();
        // Inserting Multiple Rows
        $strSQL = "
            DELETE FROM persons
            WHERE Id = " . $_GET['k'];
    
        if(mysqli_query($con, $strSQL))
            header("location: person.php");
        else
            $arrError[] = 'Error: Failed Delete SQL';
        closeConnections($con);
    }
    header("Location: persons.php");

    
?>