<?php
    session_start();
    if(isset($_GET['k'])){
        require('../functions.php');
        $con = openConnection();
        $stSQLSelect = "SELECT * FROM tbl_products WHERE id = " . $_GET['k'];
        $recProduct = getRecord($con, $stSQLSelect);
        $strSQL = "
            DELETE FROM tbl_products
            WHERE id = " .$recProduct[0]['id'];
    
        if(mysqli_query($con, $strSQL)){
            unlink("../img/" . $recProduct[0]['photo1']);
            unlink("../img/" . $recProduct[0]['photo2']);
            header("location: products.php");
            $_SESSION['successDelete'] = true;
        }

        else{
            $arrError[] = 'Error: Failed Delete SQL';
        }
        mysqli_free_result($con, $strSQL);
        closeConnections($con);
    }
    header("Location: products.php");

    
?>