<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Types Demo</title>
</head>
<body>
    <form action="">
        <label for="txtFirstName">First Name:</label>
        <input type="text" id="txtFirstName" placeholder="Enter First name" autofocus><br>
        <label for="txtLastName">Last Name:</label>
        <input type="text" id="txtLastName" placeholder="Enter Last name"><br>
        <label for="txtPassword">Password: </label>
        <input type="password" id="txtPassword" placeholder="Enter Last name"><br>

        <hr>

        <button type="submit">Send1</button>     -->
        <input type="submit" name="btnSave" value="Send2">

        <hr>

        <input type="radio" name="radSex " id="radMale" value="Male">
        <label for="radMale">Male</label><br>
        <input type="radio" name="radSex " id="radFemale" value="Female">
        <label for="radFemale">Female</label>


        <!-- 21:03 -->

        <input type="checkbox" name="chkBike" id="chkBike" value="Bike">
        <label for="chkBike">I have a bike</label><br>
        <input type="checkbox" name="chkCar" id="chkCar" value="Car">
        <label for="chkCar">I have a Car</label><br> 
        <input type="checkbox" name="chkBoat" id="chkBoat" value="Boat">
        <label for="chkBoat">I have a Boat</label><br>

        <input type="color" name="clrTheme" id="clrTheme">
        <label for="clrTheme">Pick a color</label><br>

        <label for="dtpBirthday">Birthday:</label>
        <input type="date" name="dtpBirthday" id="dtpBirthday"><br>

        <label for="txtEmail">Email Address:</label>
        <input type="email" name="txtEmail" id="txtEmail"><br>

        <label for="filPhoto">Select a file</label>
        <input type="file" name="filPhoto" id="filPhoto"><br>

        <label for="txtNumber">Enter QTY :</label>
        <input type="number" name="txtNumber" id="txtNumber"><br>

        <label for="txtVolume">Select Volume  :</label>
        <input type="range" name="txtVolume" id="txtVolume" step="10"><br>

        <label for="txtTelephone">Enter telephone number  :</label>
        <input type="tel" name="txtTelephone" id="txtTelephone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" max="10"><br>


        <label for="txtTime">Select Time  :</label>
        <input type="time" name="txtTime" id="txtTime" ><br> 

        <label for="txtURL">Add URL :</label>
        <input type="url" name="txtURL" id="txtURL" ><br> 

    </form>
</body>
</html>