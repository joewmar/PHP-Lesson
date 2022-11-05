<?php
    if(isset($_POST['btnProcess'])){
        if(isset($_FILES['filImage'])){
            $arrError = array();
            $fileName = $_FILES['filImage']['name'];
            $fileSize = $_FILES['filImage']['size'];
            $fileTemp = $_FILES['filImage']['tmp_name'];
            $fileType = $_FILES['filImage']['type'];

            $fileExtTemp = explode('.', $fileName); // thi become the array
            $fileExt = strtolower(end($fileExtTemp)); 

            $arrAllowFiles = array('jpeg', 'jpg', 'png');

            $uploadDIR = 'uploads/';

            if(in_array($fileExt, $arrAllowFiles) === false)
                $arrError[] = "Extension File is not allowed, You can only choose a JPG or PNG file"; 

            if($fileSize > 5000000)
                $arrError[] = "File size should be 5MB Maximuim";
            
            if(empty($arrError)){
                move_uploaded_file($fileTemp, $uploadDIR . $fileName);
                echo 'File Upload Successful!'; 
            }
            else{
                echo '<b>File Upload Error(s)</b><br>';
                foreach($arrError as $key => $value){
                    echo $value . '<br>';
                }
            }




            // echo $fileName . '<br>';
            // echo $fileTemp . '<br>';


        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Demo</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data"> 
        <!-- if gagamit ka ng file upload ay gagamit ka ng enctype -->
        <input type="file" name="filImage"> <br>
        <input type="submit" value="Process" name="btnProcess">

    </form>
</body>
</html>