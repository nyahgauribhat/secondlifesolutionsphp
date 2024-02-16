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
    $sql = "insert into contributor(firstName, oName, emailID, mobNum, address) values('$x', '$oname', '$ei', '$mob1','$address')";
    echo "$sql";
    if (mysqli_query($conn, $sql)) {
        header("Location: contributor_login.php");
    } else {
        echo "Error : ";
    }

}?>