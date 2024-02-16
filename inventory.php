

<?php

include('header.php');
//session_start();
?>


<body>
<h1 id="sls101">Our Current Inventory <hr></h1> 

    <div id = "cop"> 
        <?php
         $conn = mysqli_connect("localhost", "root", "", "sls");
        $sql = "select i.ID, i.categoryName, i.qty, i.contributorID, c.firstName, c.address FROM inventory i inner join contributor c on i.contributorID = c.ID"; 
        // $sql = "select * from inventory";
        //$sql = "select id, categoryName, sum(qty) as qty FROM inventory group by categoryName";

        // echo "$sql";
         $result = mysqli_query($conn, $sql);
         echo "<table class = 'inventorytable' border='1' cellspacing='4'> 
                <tr border='1'>  <th>Category Name</th><th>Quantity </th><th>Contributor ID </th><th>Contributor Name </th><th> Contributor Address</th><th>Action</th></tr>";
         // output data of each row
         while($row = $result->fetch_assoc()) {
            echo "<tr  border='1'><td>".$row["categoryName"]."</td><td>".$row["qty"]."</td><td>".$row["contributorID"]."</td> <td>".$row["firstName"]."</td><td>".$row["address"]."</td> <td>";
            if(isset($_SESSION['distributor_emailID']))
              {  
              ?>
              <a href= 'cart.php?ID=<?php echo $row['ID']?>'>
              <button class='btn btn-secondary' type='button' aria-haspopup='true' aria-expanded='false'>
                  Order an item</button></a>
             <?php }
            //   else if(isset($_SESSION['emailID']))
            //   {  

            //     echo "<a href= 'addInventory.php'><button class='btn btn-secondary type='button'  aria-haspopup='true' aria-expanded='false'>
            //     Add Item
            //       </button></a>" ;
            //   }
            // else{
            //   echo "<a href= 'login.php'><button class='btn btn-secondary' type='button' aria-haspopup='true' aria-expanded='false'>
            //   Login as Contributor to Add more Item
            //     </button></a>" ;
            // }
          echo "</td>
            </tr>";
         }
        echo "</table>";

      //   if(isset($_SESSION['distributor_emailID']))
      //   {  
      //   echo"<a href= 'cart.php'><button class='btn btn-secondary' type='button' aria-haspopup='true' aria-expanded='false'>
      //       Order an item</button></a>";
      //   }
 if(isset($_SESSION['emailID']))
        {  

          echo "<a href= 'addInventory.php'><button class='btn btn-secondary dropdown-toggle' type='button' id='dropdownMenuButton' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
          Add Item
            </button></a>" ;
        }
      else{
        echo "<a href= 'login.php'><button class='btn btn-secondary' type='button' aria-haspopup='true' aria-expanded='false'>
        Login as Contributor to Add more Item
          </button></a>" ;
      }
  ?>
  
    
  
</div> 
   
    
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