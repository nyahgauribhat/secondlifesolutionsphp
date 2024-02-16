<?php    
// $x = 5;
// echo "$x";
$x = $_POST["fname"];
// echo "$x";
?>
<html> <br> </html>
<?php 
$ei = $_POST["emailid"];
// echo "$ei <br>";
$mob1 = $_POST["mob"];
// echo "$mob1 <br>";
$msg= $_POST["message"];
// echo "$msg <br>";
$conn = mysqli_connect("localhost", "root", "", "sls");
if($conn)
echo "connectiion built successfully";
else 
echo "error";
$sql = "insert into contactus(firstName, emailID, mobileNumber, message) values('$x', '$ei', '$mob1','$msg')";
if (mysqli_query($conn, $sql)) {
    header("Location: contact.php");
} else {
    echo "Error : ";
}
?>


