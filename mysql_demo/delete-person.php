<?php
    session_start();

    if(isset($_GET['k']))
        $_SESSION['k'] = $_GET['k'];
    
        require("open_connection.php");
        $strSQL = "SELECT * FROM persons WHERE Id = ". $_SESSION['k'];
        if($rsPersons = mysqli_query($con, $strSQL)){
            if(mysqli_num_rows($rsPersons) > 0){
                $recPerson = mysqli_fetch_array($rsPersons);
                
                
                mysqli_free_result($rsPersons);
                // $recPerson = mysqli_fetch_array($rsPersons);
                // print_r($recPerson);
            }
            else{
                echo '<tr>
                <td collspan="4" align="center">No record found</td>
            </tr>'; 
            }
        }
        else
            echo 'ERROR: Could not execute your request';
        
        require("close_connection.php");     

    if(isset($_POST['btnRemove'])){
            require('open_connection.php');
            // Inserting Multiple Rows
            $strSQL = "
                DELETE FROM persons
                WHERE Id = " . $_SESSION['k'];
        
            if(mysqli_query($con, $strSQL))
                header("location: person.php");
            else
                $arrError[] = 'Error: Failed Delete SQL';
        
            require('close_connection.php');
    }

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Person</title>
</head>
<body>
    <h1>Edit Person</h1>
        <!-- <h1><?php print_r($arrError);?></h1> -->
    <hr>
    <p>Are you sure you want to remvoe this record?</p>
    <ul>
        <?php
            if(isset($recPerson)){
                echo '<li><b>Name:</b> ' . $recPerson['FirstName']. ' ' . $recPerson['LastName'] . '</li>';
                echo '<li><b>Sex:</b> ' . $recPerson['Sex']. '</li>';
                echo '<li><b>Email:</b> ' . $recPerson['Email']. '</li>';
            }
        
        ?>
    </ul>
    <form action="" method="post">
        <input type="submit" name="btnRemove" id="btnSubmit" value="Yes">
        <a href="person.php">No</a>

    </form>
</body>
</html>