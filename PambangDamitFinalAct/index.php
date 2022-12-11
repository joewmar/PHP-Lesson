<?php
    session_start();
    require("functions.php");
    if(isset($_POST['btnLogin'])){
        $con = openConnection();
        $username = htmlspecialchars( $_POST['txtUsername']); // anti xss
        $password = htmlspecialchars( $_POST['txtPassword']);

        $username = stripslashes($username);    // removal of single quotes, slash specifically
        $password = stripslashes($password);

        $username = mysqli_real_escape_string($con, $username); //escaping any attempts for SQL Injection
        $password = mysqli_real_escape_string($con, $password);

        $password = md5($password); // hash the password

        $strSQL = "
                    SELECT * FROM tbl_user 
                    WHERE username = '$username' 
                    AND password = '$password'

        ";
        if($rsLogin = mysqli_query($con, $strSQL)){
            if(mysqli_num_rows($rsLogin) > 0){
                while($arrRec = mysqli_fetch_array($rsLogin)){
                    $_SESSION['username'] = $arrRec['username'];
                }
                if($_SESSION['username'] == "admin"){
                    header("location: admin-panel/");
                }
                else{
                    header("location: guest-panel/");
                }
                mysqli_free_result($rsLogin);
            }
            else{
               echo 
               '
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Wrong Username/Password.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
               
               
               ';
            }
        }
        else
            echo 'ERROR: Could not execute your request';
        
            closeConnections($con);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/custom-login.css">
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

    <script type="text/javascript" src="./js/jquery.js"></script>
    <script type="text/javascript" src="./js/bootstrap.js" ></script>
</body>
</html>