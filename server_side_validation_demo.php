<?php
    $fullname = "";
    $sex = "Male";
    $emailAddress = "";
    $jobType = "";
    if(isset($_POST['btnSubmit'])){
        // data scrubbing 
        $fullname = htmlspecialchars(stripslashes(trim($_POST['txtFullName'])));
        $sex = $_POST['radSex'];
        $emailAddress = htmlspecialchars(stripslashes(trim($_POST['txtEmail'])));
        $jobType = $_POST['drpPosition'];

        //test if the following fields are empty and correct
        if(empty($fullname)){
            $arrError['fullName'] = "Full Name is Required.";
        }

        if(empty($emailAddress)){
            $arrError['emailAddress'] = "Email Address is Required.";
        }
        else{
            if(!filter_var($emailAddress, FILTER_VALIDATE_EMAIL))
                $arrError['emailAddress'] = "Email Address is Invalid.";
        }

        if(empty($jobType)){
            $arrError['jobType'] = "Job Type is Required.";
        }

        if(!isset($arrError))
            header("location: server_side_validation_success_demo.php")

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
                    <?php if (isset($arrError)): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>System Error:</strong> The Following list are the Errors in the Form
                            <hr>
                            <ul>
                                <?php foreach($arrError as $key => $value): ?>
                                        <li><?php echo  $value; ?></li>
                                <?php endforeach;?>
                            </ul>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif;?>
                        <div id="login-box" class="col-md-12 h-100 m-1">
                            <form id="login-form" class="form" action="" method="post">
                                <h3 class="text-center text-info">Login</h3>

                                <div class="form-group">
                                    <label for="txtFullName" class="text-info">Full Name:</label><br>
                                    <input type="text" name="txtFullName" id="txtFullName" class="form-control" value="<?php echo $fullname ?>">
                                </div>
                                <div class="form-group">
                                    <label for="radSex">Sex:</label><br>
                                    <?php
                                        if($sex == "Male")
                                            echo '<input type="radio" name="radSex" id="radMale" value="Male" checked>';
                                        else                                        
                                            echo '<input type="radio" name="radSex" id="radMale" value="Male">';                                     
                                    
                                    ?>
                                    <label for="radMale" >Male</label>
                                    <?php
                                        if($sex == "Female")
                                            echo '<input type="radio" name="radSex" id="radFemale" value="Female" checked>';
                                        else                                        
                                            echo '<input type="radio" name="radSex" id="radFemale" value="Female">';                                     
                                    
                                    ?>
                                    <label for="radFemale">Female</label>
                                </div>
                                <div class="form-group">
                                    <label for="txtEmail" class="text-info">Email:</label><br>
                                    <input type="text" name="txtEmail" id="txtEmail" class="form-control" value="<?php echo $emailAddress;?>">
                                </div>
                                <div class="form-group">
                                    <label for="drpPosistion" class="text-info">Job Type:</label><br>
                                    <select class="form-control" name="drpPosistion" id="drpPosistion">
                                        <?php
                                            $arrJobType = array("Developer", "Designer", "Quality Assurance");
                                        .....................
                                        ?>
                                        <option value="Developer">Developer</option>
                                        <option value="Designer">Designer</option>
                                        <option value="Quality Assurance">Quality Assurance</option>
                                    </select>
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
    
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
</body>
</html>