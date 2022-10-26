<!DOCTYPE html>
<html lang="en">
<?php
    $arrDrinks = array("Coke" => 15, "Sprite" => 20, "Royal" => 20, "Pepsi" => 15, "Mountain Dew" => 20);
    $arrSize = array("Regular" => 0, "Up-Size" => 5, "Jumbo" => 10);
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Machine</title>
</head>
<body>
    <h3>Vendo Machine</h3>
    <form action="" method="post">
        <fieldset>
            <legend>Products:</legend>
            <?php
                foreach($arrDrinks as $key => $value){
                    echo '<input type="checkbox" name="chkDrinks[]" id="chk' . $key .'" value="'. $key .'"><label for="chk' . $key .'">' . $key . ' - ₱ ' . $value . '</label><br>';
                }
            ?>
        </fieldset>

        <fieldset>
            <label for="drpSize">Size</label>
            <legend>Options:</legend>
            <select name="drpSize" id="drpSize">
                <option value="Regular">Regular</option>
                <option value="Up-Size">Up-Size (add ₱5)</option>
                <option value="Jumbo">Jumbo(add ₱10)</option>
            </select>

            <label for="txtQTY">Quantity</label>
            <input type="number" name="txtQTY" id="txtQTY" value="1">
            <input type="submit" name="btnSend" id="btnSend" value="Check Out">
        </fieldset>
    </form>

</body>
WWWW
    <?php if(isset($_POST['btnSend']) && isset($_POST['chkDrinks'])){ ?>
        <h3>Product Summary:</h3>
        <ul>
            <?php
            $arrUserChoice = $_POST['chkDrinks'];WWWW
            $size = $_POST['drpSize'];
            $quantity = $_POST['txtQTY'] ;
            foreach($arrUserChoice as $key => $value){
                if($quantity > 1):
                    echo '<li>'. $quantity . ' pieces of '. $size . ' ' .$value . ' amouting to </li>';
                else:
                    echo '<li>'. $quantity . ' piece of '. $size . ' '. $value .' amouting to</li>';
                endif;
            }

            ?>  
        </ul>
        
        <h4>Total Number of Items: </h4>
        <h4>Total Amount: </h4>
            
    <?php } ?>
</html>