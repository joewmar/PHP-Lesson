<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XSS Demo</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="txtName">
        <input type="submit" value="Send" name="btnSend">
    </form>

    <!-- Solution: PHP Filter and HTML Encoding -->

    <?php
        if(isset($_POST['btnSend'])){
            // echo $_POST['txtName'];
            // Method I: PHP Filter --- filter_input(type, variable_name, FILTER_TYPE)
            echo filter_input(INPUT_POST, 'txtName', FILTER_SANITIZE_SPECIAL_CHARS) ;

            // Method II: HTML Encoding --- htmlspecialchars(string) 
            echo htmlspecialchars($_POST['txtName']);

        }
    
    
    
    ?>
    
</body>
</html>