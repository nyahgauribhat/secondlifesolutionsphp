<?php

include('header.php');
//session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form id ="cform" method = "post" action = "addcontributor.php"> 
        <div class = "entirec"> <span class = "inputtypes">Name: </span> <input type = "text" class = "contactinput" name = "fname"> </div>
        <div class = "entirec"> <span class = "inputtypes">Organisation Name (If applicable): </span> <input type = "text" class = "contactinput" name = "oname"> </div>
        <div class = "entirec"><span class = "inputtypes">Email: </span> <br> <input type = "email"class = "contactinput" name = "emailid"></div>
        <div class = "entirec"><span class = "inputtypes">Mobile Number: </span> <input type = "number"class = "contactinput" name = "mob"></div>
        <div class = "entirec"><span class = "inputtypes">Address:</span> <input type = "text"class = "contactinput" name = "address"></div>
        <div id = "submitbtn"> <input type = "submit" name= "save" id = "submitbtninput">  </div>
</form>
    
</body>
</html>