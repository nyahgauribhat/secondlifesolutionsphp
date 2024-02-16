<?php

include('header.php');
//session_start();
?>


<body>
    <div id = "cop"> 
    <!-- 1 -->
<div class = "row1"> 

  <?php
   
    if(isset($_SESSION['emailID']))
      {  
        $conn = mysqli_connect("localhost", "root", "", "sls");
        $sql = "select * from categories";
        $result = mysqli_query($conn, $sql);
?>
<form action='addInventory.php' method = 'post'>
<label>Select a Category</label>
<select name="Category">
<?php
        while($row = $result->fetch_assoc()) 
        {
            echo "<option value = '".$row["categoryName"]."'>" .$row["categoryName"] ;
        
        // echo "<a href= 'addInventory.php'><button class='btn btn-secondary dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
        // Add Item
        //   </button></a>" ;
      }
      ?>
      </select>
      <label>Quantity Required :</label> <input type = "number"name="qty">
      <input type = "submit" name= "save"> 
    </form>
      <?php
    }
  ?>
  

  <?php
  if(isset($_POST["save"]))
  {
  $Category = $_POST["Category"];
  $qty = $_POST["qty"];
 
  $conn = mysqli_connect("localhost", "root", "", "sls");
  $ID = $_SESSION['ID'];
   $sql = "insert into inventory(categoryName, qty, contributorID) values('$Category', '$qty', '$ID')";
//   echo "$sql";
  if (mysqli_query($conn, $sql)) {
    header("Location: inventory.php");
     } else {
     echo "Error : ";
   }
  
  }?>
  
</div>
</div> 
 
<?php

include('footer.php');

?>

</body>

<script src="js/script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://kit.fontawesome.com/18824d66d9.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>