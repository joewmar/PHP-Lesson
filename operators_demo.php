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
        $color = array("Red", "Blue", "Green");
        echo $color; // Error: Array to string conversion

        //Declaration: Indexed Arrays Method 1
        $cars = array("Volvo", "BMW", "Toyota");
         //Declaration: Indexed Arrays Method 2
        $pet = ["Dog", "Cat", "Pig", "Hamster"];
        //Declaration: Indexed Arrays Method 3
        $country[0] = "Philippines";
        $country[1] = "Japan";
        $country[2] = "Korea";
        $country[3] = "Russia";
        $country[4] = "UAE";
        
        //Access them 
        echo $pet[2]; // $variable[index];

        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        //Declaration: Associative Arrays
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

         //Access them 
         echo $age["Ben"]; // $variable[key];

        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


        //Declaration: Multidimensional Arrays
        $contacts = array (
            array(
                'name' => 'Joew World'
                'email' => 'helloworld01@email.com'
                'sex' => 'Male'
            ),
            
            array(
                'name' => 'Peter Parker'
                'email' => 'peterparker@email.com'
                'sex' => 'Male'
            ),
            array(
                'name' => 'Clark Kent'
                'email' => 'clarkkent.com'
                'sex' => 'Male'
            ),
            array(
                'name' => 'Katnis Everdeen'
                'email' => 'katniseverdeen@email.com'
                'sex' => 'Female'
                )
          );

        //Access them 
        echo $contacts[0]['name']; // $variable[index][key];


        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        // To View structure of Array

        print_r($contacts);
        var_dump($age);
    ?>
</body>
</html>