<?php
if(isset($_POST["save"]))
{
    $x = $_POST["fname"];
    $oname = $_POST["oname"];
    $ei = $_POST["emailid"];
    $mob1 = $_POST["mob"];
    $address= $_POST["address"];
    echo "$ei";
    // $conn = mysqli_connect("localhost", "root", "", "sls");
    $conn = mysqli_connect("localhost", "u399519417_nyah", "xD0>j5ioF", "u399519417_envirofound");
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
}

echo "on another page";
?>