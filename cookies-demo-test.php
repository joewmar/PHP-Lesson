<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies Demo Test</title>
</head>
<body>
    <?php
        if(isset($_COOKIE['username']))
            echo $_COOKIE['username'];
            echo $_COOKIE['firstname'];
    ?>
</body>
</html>