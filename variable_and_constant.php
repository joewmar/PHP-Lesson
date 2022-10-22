<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*
            String
            Integer
            Double 
            Boolean
            Array
            Object
            NULL
            Resource - useful for database connection
        */
        //String
        $message = "Hello world!";  

        //Integer
        $num = 5985;

        //Double
        $x = 10.365;
        
        //Boolean
        $a = true;
        $b = false;

        //NULL Value
        $x = "Hello world!";
        $x = null;
        var_dump($x);
        
    
        // PHP Constants
        //define(name, value, case-insensitive)
        define("PI", "3.1416");
        echo PI;
        
    ?>
</body>
</html>