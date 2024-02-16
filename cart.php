
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
<?php 
$id = $_GET['ID'];
$conn = mysqli_connect("localhost", "root", "", "sls");
        $sql = "delete from inventory where ID = $id";
        if(mysqli_query($conn, $sql))
        header("Location: inventory.php");
        else 
        echo "Error";
?> 
      
            
</form>
    
</body>
</html>

<?php
// if(isset($_POST["save"]))
// {
//     $categoryName = $_POST["Category"];
//     $orderedQty = $_POST["qty"];
//     $conn = mysqli_connect("localhost", "root", "", "sls");
//     if($conn)
//     echo "connection built successfully";
//     else 
//     echo "error";
//     //$sql = "insert into distributor(firstName, oName, emailID, mobNum, address) values('$x', '$oname', '$ei', '$mob1','$address')";
//     //$sql = "select id, categoryName, sum(qty) as qty FROM inventory group by categoryName";
//     $sql = "SELECT * FROM inventory where qty > $orderedQty and categoryName = '$categoryName'";

//    //$sql= "select sum(qty) as qty FROM inventory where categoryName = '$categoryName' group by categoryName";
//    //if orderedQty<qty; qty = qty-orderedQty

//    $result = mysqli_query($conn, $sql);
//    while($row = $result->fetch_assoc()) 
//    {
//     $contributorID = $row["contributorID"];
//    $qty =  $row["qty"];
//     // echo "<tr><td>".$row["ID"]."</td><td>".$row["firstName"]." </td><td>".$row["oName"]."</td><td>".$row["emailID"]."</td> <td>".$row["mobNum"]."</td><td>".$row["address"]."</td> </tr>";
// }
// if($orderedQty<$qty)
// {
//     $sql = "update inventory set qty =$qty-$orderedQty where categoryName = $categoryName";
//     if(mysqli_query($conn, $sql))
//     {
//         echo "updated successfuly";
//     }
//     else 
//     echo "error";
// }

//}?>
