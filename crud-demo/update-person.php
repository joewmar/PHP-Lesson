
<?php
    session_start();
    $_SESSION['CURR_PAGE'] = 'persons';
?>
<?php require_once("header.php") ?>
<?php
    if(isset($_GET['k'])){
        $_SESSION['k'] = $_GET['k'];
    }
    $con = openConnection();
    $strSQL = "SELECT * FROM persons WHERE Id = ". $_SESSION['k'];
    $recPersons = getRecord($con, $strSQL);

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
        
        }

    }
    closeConnections($con);


?> 
<div class="container-fluid">
        <div class="row">
            <?php require_once("nav.php")?>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2"><i class="fa fa-users"></i> Add Persons</h1>
                </div>
                <?php print_r($recPersons);?>
                <form method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="txtLastName">Last Name <span class="text-danger">*</span></label>
                            <input type="text" name="txtLastName" class="form-control" id="txtLastName" required autofocus value="<?php echo $recPersons['LastName']?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="txtFirstName">FirstName <span class="text-danger">*</span></label>
                            <input type="text" name="txtFirstName" class="form-control" id="txtFirstName" required value="<?php echo $recPersons['FirstName']?>">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="drpSex">Sex <span class="text-danger">*</span></label>
                            <select class="form-control" name="drpSex" id="drpSex" required >
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
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="txtEmail">Email Address <span class="text-danger">*</span></label>
                            <input type="email" name="txtEmail" class="form-control" id="txtEmail" required value="<?php echo $recPersons['Email']?>">
                        </div>
                    </div>
                    <button type="submit" name="btnAdd" class="btn btn-primary"><i class="fa fa-plus"></i> Update</button>
                    <a href="person.php" class="btn btn-primary"><i class="fa fa-plus"></i> Update</a>
                </form>
                <br><br>
            </main>
        </div>
    </div>
<?php require_once("footer.php")?>