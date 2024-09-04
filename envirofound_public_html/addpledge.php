<?php
if(isset($_POST["save"]))
{
    $x = $_POST["firstname"];
    $ei = $_POST["emailID"];
    $mob1 = $_POST["pledgeamt"];
    $conn = mysqli_connect("localhost", "u399519417_nyah", "Nyah@123", "u399519417_envirofound");
    if($conn)
    echo "connection built successfully";
    else 
    echo "error";
    $sql = "insert into pledge(firstname, emailID, pledgeamt) values('$x', '$ei', '$mob1')";
    echo "$sql";
    if (mysqli_query($conn, $sql)) {
        header("Location: donate.php");
    } else {
        echo "Error : ";
    }

}?>