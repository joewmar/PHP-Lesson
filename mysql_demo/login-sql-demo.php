<?php
    if(isset($_POST['btnLogin'])){
        require("open_connection.php");
        $username = htmlspecialchars( $_POST['txtUsername']); // anti xss
        $password = htmlspecialchars( $_POST['txtPassword']);

        $username = stripslashes($username);    // removal of single quotes, slash specifically
        $password = stripslashes($password);

        $username = mysqli_real_escape_string($con, $username); //escaping any attempts for SQL Injection
        $password = mysqli_real_escape_string($con, $password);

        $password = md5($password); // hash the password

        $strSQL = "
                    SELECT * FROM users 
                    WHERE username = '$username' 
                    AND password = '$password'
        
        ";
        if($rsLogin = mysqli_query($con, $strSQL)){
            if(mysqli_num_rows($rsLogin) > 0){
                echo 'Welcome to the System';
                mysqli_free_result($rsLogin);
            }
            else{
                echo 'Invalid Username/Password'; 
            }
        }
        else
            echo 'ERROR: Could not execute your request';
        
        require("close_connection.php"); 
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/custom-login.css">
</head>
<body>
<div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="txtUsername" class="text-info">Username:</label><br>
                                <input type="text" name="txtUsername" id="txtUsername" class="form-control" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="txtPassword" class="text-info">Password:</label><br>
                                <input type="password" name="txtPassword" id="txtPassword" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info btn-md form-control" name="btnLogin">Sign in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>