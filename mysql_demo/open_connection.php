<?php
    $con = mysqli_connect("localhost", "root", "admin","demo"); //open

    if($con === false)
        die("ERROR: Could not Connect " . mysqli_connect_error()); //validate whetheir the connection is successfull

?>