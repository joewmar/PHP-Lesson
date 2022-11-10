<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/custom-login.css">
</head>

<?php
    $arrUserType = array("admin" => "Admin", "joemar" => "Admin", "pepito" => "Content Manager", "juan" => "Content Manager", "pedro" => "System User");
    $arrPassword= array("admin" => "Pass1234", "joemar" => "hello12345", "pepito" => "manaloto", "juan" => "delacruz", "pedro" => "penduko");

?>
<body>

    
    <div id="login">
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                    <?php
                                if(isset($_POST['btnSubmit'])){
                                    $userType = $_POST['drpPosistion'];
                                    $username = $_POST['txtUsername'];
                                    $password = $_POST['txtPassword'];
                                    if ($userType === $arrUserType[$username] && $password === $arrPassword[$username]):
                                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
                                        echo '<strong>Welcome to System: </strong> ' . $username .'.';
                                        echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
                                        echo '<span aria-hidden="true">&times;</span>';
                                        echo '</button>';
                                        echo '</div>';
                                    else:
                                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                                        echo '<strong>Invalid</strong> Username/Password';
                                        echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
                                        echo '<span aria-hidden="true">&times;</span>';
                                        echo '</button>';
                                        echo '</div>';
                                    endif;
                                }
                            
                        ?>
                        <div id="login-box" class="col-md-12 h-100">
                            <form id="login-form" class="form" action="" method="post">
                                <h3 class="text-center text-info">Login</h3>
                                <div class="form-group">
                                    <select class="form-control" name="drpPosistion" id="drpPosistion">
                                        <option value="Admin">Admin</option>
                                        <option value="Content Manager">Content Manager</option>
                                        <option value="System User">System User</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="txtUsername" class="text-info">Username:</label><br>
                                    <input type="text" name="txtUsername" id="txtUsername" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="txtPassword" class="text-info">Password:</label><br>
                                    <input type="password" name="txtPassword" id="txtPassword" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-info btn-md form-control" name="btnSubmit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.js"></script>
</body>
</html>