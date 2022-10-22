<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Form Element</title>
</head>
<body>
    <form action="" method="">
        <input type="text" name=""> <!-- textbox -->

        <hr>

        <select name="drpCar" id="drpCar" > <!-- dropdown list --> <!--attribute: size="5" multiple-->
            <option value="Volvo">Volvo</option>
            <option value="Saab">Saab</option>
            <option value="Fiat" selected>Fiat</option>
            <option value="Audi">Audi</option>
            <option value="Toyota">Toyota</option>
            <option value="Mitsubihi">Mitsubihi</option>
            <option value="Honda">Honda</option>
        </select>
        <hr>
        <textarea name="txtPost" id="txtPost" cols="30" rows="10"></textarea> <!-- multiline textbox-->

        <hr>

        <button type="button">Click Me</button> <!--type: button, submit, reset -->

        <hr>

        <fieldset> <!-- to group related data in a form -->
            <legend>Personal Information</legend>
            Last Name: <input type="text" name=""> <!-- textbox -->
            First Name: <input type="text" name=""> <!-- textbox --> 
        </fieldset>

        <hr>

        <input type="text" name="dlstBrowser" list="browsers"> <!-- textbox -->

        <datalist id="browsers">
            <option value="Microsoft Edge">
            <option value="Mozilla Firefox">
            <option value="Google Chrome">
            <option value="Opera">
            <option value="Safari">   
        </datalist>

    </form>
</body>
</html>