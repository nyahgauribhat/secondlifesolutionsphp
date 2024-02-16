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

    <form id ="cform" method = "post" action = ""> 
        <div class = "entirec"> <span class = "inputtypes">Name: </span> <input type = "text" class = "contactinput" name = "fname"> </div>
        <div class = "entirec"> <span class = "inputtypes">Organisation Name (If applicable): </span> <input type = "text" class = "contactinput" name = "oname"> </div>
        <div class = "entirec"><span class = "inputtypes">Email: </span> <br> <input type = "email"class = "contactinput" name = "emailid"></div>
        <div class = "entirec"><span class = "inputtypes">Mobile Number: </span> <input type = "number"class = "contactinput" name = "mob"></div>
        <div class = "entirec"><span class = "inputtypes">Address:</span> <input type = "text"class = "contactinput" name = "address"></div>
        <!-- <div class = "entirec"><span class = "inputtypes">Category Name :</span> -->
        <!-- <?php 
        // $conn = mysqli_connect("localhost", "root", "", "sls");
        // $sql = "select * from categories";
        // $result = mysqli_query($conn, $sql);
?> -->
        
        <!-- <select name="Category">
        <?php
            //     while($row = $result->fetch_assoc()) 
            //     {
            //         echo "<option value = '".$row["categoryName"]."'>" .$row["categoryName"] ;
                
            //     // echo "<a href= 'addInventory.php'><button class='btn btn-secondary dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
            //     // Add Item
            //     //   </button></a>" ;
            // }
            ?>
            </select>
        </div>
        <div class = "entirec"><span class = "inputtypes">Quantity:</span> <input type = "number"class = "contactinput" name = "address"></div> -->
        <div id = "submitbtn"> <input type = "submit" name= "save">  </div>
</form>
    
</body>
</html>

<?php
if(isset($_POST["save"]))
{
    $x = $_POST["fname"];
    $oname = $_POST["oname"];
    $ei = $_POST["emailid"];
    $mob1 = $_POST["mob"];
    $address= $_POST["address"];
    $conn = mysqli_connect("localhost", "root", "", "sls");
    if($conn)
    echo "connection built successfully";
    else 
    echo "error";
    $sql = "insert into distributor(firstName, oName, emailID, mobNum, address) values('$x', '$oname', '$ei', '$mob1','$address')";
    echo "$sql";
    if (mysqli_query($conn, $sql)) {
        header("Location: distributor_login.php");
    } else {
        echo "Error : ";
    }

}?>