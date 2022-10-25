<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form data (Received)</title>
</head>
<body>
    <?php
    /* ......use $_GET if you use get method on your form
     echo $_GET['txtFirstName'];
     echo $_GET['txtLastName'];

     
    $firstname = $_GET['txtFirstName'];
    $lastname =  $_GET['txtLastName'];
    $sex = $_GET['radSex'];

    if($sex == 'Male')
        echo "Hello, Sir $firstname $lastname";
    else
        echo "Hello, Maam $firstname $lastname";
    */

    /* ......use $_POST if you use post method on your form
    $firstname = $_POST['txtFirstName'];
    $lastname =  $_POST['txtLastName'];
    $sex = $_POST['radSex'];

    if($sex == 'Male')
        echo "Hello, Sir $firstname $lastname";
    else
        echo "Hello, Maam $firstname $lastname";
    */

    $firstname = $_REQUEST['txtFirstName'];
    $lastname =  $_REQUEST['txtLastName'];
    $sex = $_REQUEST['radSex'];

    if($sex == 'Male')
        echo "Hello, Sir $firstname $lastname";
    else
        echo "Hello, Maam $firstname $lastname";
    ?>
    
</body>
</html>