
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Person List</h2>
    <table border="1" cellpadding="3" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Full name</th>
                <th>Sex</th>
                <th>Email Address</th>
                <th>Update</th>

            </tr>
        </thead>
        <tbody>
        <?php 
            require("open_connection.php");
            $strSQL = "SELECT * FROM person WHERE Sex = 'Male' ORDER BY LastName";
            if($rsPersons = mysqli_query($con, $strSQL)){
                if(mysqli_num_rows($rsPersons) > 0){
                    while($recPerson = mysqli_fetch_array($rsPersons)){
                        echo '<tr>
                            <td>' . $recPerson['FirstName'] . ' '. $recPerson['LastName']. '</td>
                            <td>' . $recPerson['Sex'] . '</td>
                            <td>' . $recPerson['Email'] . '</td> 
                            <td align="center"><a href="update-person.php?k="'$recPerson['ID']'>EDIT</a></td> 
                        </tr>'; 
                    }
                    mysqli_free_result($rsPersons);
                    // $recPerson = mysqli_fetch_array($rsPersons);
                    // print_r($recPerson);
                }
                else{
                    echo '<tr>
                    <td collspan="4" align="center">No record found</td>
                </tr>'; 
                }
            }
            else
                echo 'ERROR: Could not execute your request';
            
            require("close_connection.php"); 
        ?>
        </tbody>


    </table>

</body>
</html>