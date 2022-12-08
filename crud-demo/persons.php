<?php
    session_start();
    $_SESSION['CURR_PAGE'] = 'persons';

?>
<?php require_once("header.php")?>
<?php
    if(isset($_POST['btnAdd'])){
        $con = openConnection();
        
        $lastname = sanitizeInputs($con, $_POST['txtLastName']);
        $firstname = sanitizeInputs($con, $_POST['txtFirstName']);
        $sex = sanitizeInputs($con, $_POST['drpSex']);
        $email = sanitizeInputs($con, $_POST['txtEmail']);
        $arrError = [];

        if(empty($lastname))
            $arrError[] = "Last Name is Required";
        
        if(empty($firstname))
            $arrError[] = "First Name is Required";

        if(empty($email))
            $arrError[] = "Email Address is Required";            

                // Next time tuloy mo yun arrError printing

        if(empty($arrError)){
            // Inserting Multiple Rows
            $strSQL = "
            
                INSERT INTO persons 
                (LastName, FirstName, Sex, Email)
                VALUES 
                ('$lastname', '$firstname', '$sex', '$email')
        
            ";
        
            if(mysqli_query($con, $strSQL))
                header("location: persons-add-success.php");
            else
                $arrError[] = 'Error: Failed SQL';
        
           
        }

        closeConnections($con);
    }

?>
    <div class="container-fluid">
        <div class="row">
            <?php require_once("nav.php")?>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2"><i class="fa fa-users"></i> Add Persons</h1>
                </div>

                <form method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="txtLastName">Last Name <span class="text-danger">*</span></label>
                            <input type="text" name="txtLastName" class="form-control" id="txtLastName" required autofocus>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="txtFirstName">FirstName <span class="text-danger">*</span></label>
                            <input type="text" name="txtFirstName" class="form-control" id="txtFirstName" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="drpSex">Sex <span class="text-danger">*</span></label>
                            <select class="form-control" name="drpSex" id="drpSex" required >
                                    <?php
                                        if(isset($arrSex)){
                                            foreach ($arrSex as $key => $value) {
                                               echo '<option value="' . $value . '">' . $value . '</option>';
                                            }
                                        }
                                    ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="txtEmail">Email Address <span class="text-danger">*</span></label>
                            <input type="email" name="txtEmail" class="form-control" id="txtEmail" required>
                        </div>
                    </div>
                    <button type="submit" name="btnAdd" class="btn btn-primary"><i class="fa fa-plus"></i> Sign in</button>
                </form>
                <br><br>
                <h2><i class="fa fa-table"></i> List of Persons</h2>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>Full Name</th>
                                    <th>Sex</th>
                                    <th>Email</th>
                                    <th colspan="2">Options</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $con = openConnection();
                                $strSQL = "SELECT * FROM persons ORDER BY Sex, FirstName";
                                $recPersons = getRecord($con, $strSQL);

                                if(!empty($recPersons)){
                                    foreach ($recPersons as $key => $value) {
                                        echo '
                                        <tr>
                                            <td>' . $value['FirstName'] . ' ' . $value['LastName'] . '</td>
                                            <td>' . $value['Sex']  . '</td>
                                            <td>' .  $value['Email'] . '</td>
                                            <td>
                                                <a href="update-person.php?k=' . $value['Id'] . '" class="btn btn-success"><i class=" fa fa-edit"></i> Edit</a> 
                                                <a href="update-person.php?r=' . $value['Id']. '" class="btn btn-danger"><i class=" fa fa-trash"></i> Remove</a>
                                            </td>
                                        </tr>
        
                                        ';
                                    }
                                }
                                else{

                                }
                                closeConnections($con);
                            ?>
                               
                            </tbody>
                        </table>
                    </div>

            </main>
        </div>
    </div>
<?php require_once("footer.php")?>



