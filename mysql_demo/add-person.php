<?php
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
            
                INSERT INTO person(LastName, FirstName, Sex, Email)
                VALUES 
                ('$lastname', '$firstname', '$sex', '$email')
        
            ";
        
            if(mysqli_query($con, $strSQL))
                header("location: clear-add-person.php");
            else
                $arrError[] = 'Error: Failed SQL';
        
            require('close_connection.php');
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Person</title>
</head>
<body>
    <h1>Add Person</h1>
    <hr>
    <form action="" method="post">
        <input type="text" name="txtLastName" id="txtxLastName" placeholder="Last Name" required><br>
        <input type="text" name="txtFirstName" id="txtxFirstName" placeholder="First Name" required><br>
        <select name="drpSex" id="">
            <option value="Male" selected>Male</option>
            <option value="Female">Female</option>
        </select><br>
        <input type="email" name="txtEmail" id="txtxEmail" placeholder="Email Address" required><br>
        <input type="submit" name="btnSubmit" id="btnSubmit" value="Add Person"><br>

    </form>
</body>
</html>