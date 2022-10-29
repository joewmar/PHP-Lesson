<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Encoding Demo</title>
</head>
<body>
    <?php
        // <!-- Solution: URL Encoding --> )
        $firstname = urlencode("Joemar & home");
        $lastname = urlencode ("World");
        $sex = urlencode ("Male");
    ?>
    <!-- Problem  -->
    <a href="url_encoding_page2.php?fname=<?php echo $firstname?>&lname=<?php echo $lastname?>&sex=<?php echo $sex?>">Click me baby one more time</a>


</body>
</html>