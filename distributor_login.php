
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
    <title>Distributor Login</title>
</head>
<body>
<h1 id="sls101">Login for Distributors<hr></h1> 
    <form id ="cform" method = "post"> 
        <div class = "entirec"><span class = "inputtypes">Email: </span>  <input type = "email"class = "contactinput" name = "emailid"></div>
        <div id = "submitbtn"> <input type = "submit" name= "save" id = "submitbtnio">  </div>
</form>
    
</body>
</html>

<?php
    if(isset($_POST["save"]))
    {
        $ei = $_POST["emailid"];
        $conn = mysqli_connect("localhost", "root", "", "sls");
        // if($conn)
        // echo "connection built successfully";
        // else 
        // echo "error";
        $sql = "select * from distributor where emailID = '$ei'";
       // echo "$sql";
        $result = mysqli_query($conn, $sql);
        session_start();
      //  echo "<table border='1'> <tr> <th> id </th> <th>First Name</th><th>Organisation Name</th><th>Email id</th><th>Mob number</th><th>Address</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Welcome ".$row["firstName"] ;
           $emailID =  $row["emailID"];
            $_SESSION['distributor_emailID']=$emailID;
            $_SESSION['ID']=$row["ID"];
            echo $_SESSION['emailID'];
            // echo "<tr><td>".$row["ID"]."</td><td>".$row["firstName"]." </td><td>".$row["oName"]."</td><td>".$row["emailID"]."</td> <td>".$row["mobNum"]."</td><td>".$row["address"]."</td> </tr>";
        }
//        echo "</table>";
header("Location: inventory.php");
        mysqli_close($conn);
    } 
?>
