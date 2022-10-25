<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Contact Form</title>
</head>
<body>
    <h2>Basic Contact Form</h2> 
    <hr>
    <form method="post">
        <label for="txtName">Name <sup style="color:red">*</sup></label><br>
        <input type="text" name="txtName" id="txtName" autofocus required><br>

        <label for="txtEmail">Email <sup style="color:red">*</sup></label><br>
        <input type="email" name="txtEmail" id="txtEmail" required><br>

        <label for="txtSubject">Subject <sup style="color:red">*</sup></label><br>
        <input type="Subject" name="txtSubject" id="txtSubject" required><br>

        <label for="txtMessage">Message <sup style="color:red">*</sup></label><br>
        <textarea name="txtMessage" id="txtMessage" row="5" cols="30" required></textarea>

        <button type="Submit"name="btnSend">Send</button>

        <hr>
         
        <?php
            echo '<h2>Thank You!</h2>';
            echo '<p>Here is the information you have submitted</p>';

            if(isset($_REQUEST['btnSend'])){
                $name = $_REQUEST['txtName'];
                $email = $_REQUEST['txtemail'];
                $subject = $_REQUEST['txtSubject'];
                $message = $_REQUEST['txtMessage'];
            }
            echo '<ul>';
                echo '<li><b>Name: </b> ' .  $name  . '</li>';
                echo '<li><b>Email: </b> ' .  $email . '</li>';
                echo '<li><b>Subject: </b> ' .  $subject .'</li>';
                echo '<li><b>Message: </b> ' .  $message . '</li>';
            echo '</ul>';

        ?>

    </form>
</body>
</html>