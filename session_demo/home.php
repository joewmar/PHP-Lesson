<?php 
    session_start();
    // if pupunta ka ng profile o home na walang naka set username at password
    if(!isset($_SESSION['username']))
        header("Location: login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <a href="home.php">Home</a>
    <a href="profile.php">Profile</a>
    <a href="logout.php">Log Out</a>

    <hr>

    <h1>Home</h1>
    <p>Welcome, <?php echo $_SESSION['username']; ?></p>
</body>
</html>