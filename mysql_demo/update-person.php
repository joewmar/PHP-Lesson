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

    if(isset($_POST['btnSubmit'])){
        $lastname = htmlspecialchars($_POST['txtLastName']);
        $firstname = htmlspecialchars($_POST['txtFirstName']);
        $sex = htmlspecialchars($_POST['drpSex']);
        $email = htmlspecialchars($_POST['txtEmail']);
        $arrError = [];

        if(empty($lastname))
            $arrError[] = "Last Name is Required";
        
        if(empty($firstname))
            $arrError[] = "First Name is Required";

        if(empty($email))
            $arrError[] = "Email Address is Required";            

                // Next time tuloy mo yun arrError printing

        if(empty($arrError)){
            require('open_connection.php');
            // Inserting Multiple Rows
            $strSQL = "
                UPDATE persons SET 
                    LastName =  '$lastname', 
                    FirstName = '$firstname', 
                    Sex = '$sex', 
                    Email = '$email'
                WHERE Id = " . $_SESSION['k'];
        
            if(mysqli_query($con, $strSQL))
                header("location: person.php");
            else
                $arrError[] = 'Error: Failed Update SQL';
        
            require('close_connection.php');
        }

    }
    $arrSex = array('Male', 'Female');

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Person</title>
</head>
<body>
    <h1>Edit Person</h1>
        <!-- <h1><?php print_r($arrError);?></h1> -->
    <hr>
    <form action="" method="post">
        <input type="text" name="txtLastName" id="txtxLastName" value="<?php echo (isset($recPerson['LastName']) ? $recPerson['LastName']: '');?>" placeholder="Last Name" required><br>
        <input type="text" name="txtFirstName" id="txtxFirstName" value="<?php echo (isset($recPerson['FirstName']) ? $recPerson['FirstName']: '');?>" placeholder="First Name" required><br>
        <select name="drpSex" id="">
            <?php
                if(isset($arrSex) && isset($recPerson['Sex'])){
                    foreach ($arrSex as $key => $value) {
                        if($value == $recPerson['Sex'])
                            echo '<option value="' . $value . '" selected>' . $value . '</option>';
                        else
                            echo '<option value="' . $value . '">' . $value . '</option>';
                    }
                }
            
            ?>
        </select><br>
        <input type="email" name="txtEmail" id="txtxEmail" value="<?php echo (isset($recPerson['Email']) ? $recPerson['Email']: '');?>" placeholder="Email Address" required><br>
        <input type="submit" name="btnSubmit" id="btnSubmit" value="Edit Person">
        <a href="person.php">Cancel / Go back</a>

    </form>
</body>
</html>