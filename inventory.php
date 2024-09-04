

<?php

include('header.php');
session_start();
?>


<body>
<?php
        if(isset($_SESSION['emailID']))
                {
                  echo "<h1> $_SESSION['firstName']</h1>";

                 }
<h1 id="sls101">Our Current Inventory <hr></h1> 

    <div id = "cop"> 
        <?php
       $conn = mysqli_connect("localhost", "u399519417_nyah", "Nyah@123", "u399519417_envirofound");
        $sql = "select i.ID, i.categoryName, i.remarks, i.qty, i.contributorID, c.firstName, c.oName, c.address FROM inventory i inner join contributor c on i.contributorID = c.ID where status = 'open'"; 
        // $sql = "select * from inventory";
        //$sql = "select id, categoryName, sum(qty) as qty FROM inventory group by categoryName";
        
        // echo "$sql";
         $result = mysqli_query($conn, $sql);
         echo "<table class = 'inventorytable' border='1' cellspacing='4'> 
                <tr border='1'>  <th>Item</th><th>Contributor Contact Person </th><th>Contributor Organization </th><th> Contributor Pickup Address</th><th>Action</th></tr>";
         // output data of each row
         while($row = $result->fetch_assoc()) {
            echo "<tr  border='1'><td>".$row["categoryName"]."</td><td>".$row["firstName"]."</td><td>".$row["oName"]."</td><td>".$row["address"]."</td> <td>";
            if(isset($_SESSION['DID']))
              {  
              ?>
              <a href= 'cart.php?ID=<?php echo $row['ID']?>?&DID=<?php echo $_SESSION['DID']?>'>
              


              <button class='btn btn-secondary' type='button' aria-haspopup='true' aria-expanded='false'>
                  Select</button>
                  </a>
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
      else if(!isset($_SESSION['DID']))
      {
        echo "<a href= 'contributor_login.php'><button class = 'btn btn-primary cont-btn' type='button' aria-haspopup='true' aria-expanded='false' id ='invbutton'>
        Login to Add
          </button></a>" ;
      }
  ?>
  <br> <br>

</div> 
<?php
if(isset($_SESSION['emailID']))
        {  
?>
<p class="tr" id = "contactline">How to Refurbish Lost Items</p>
<div id = "refurbish"> 
Collect items from organization at regular intervals <br> (For example, 1st week of Jan, Apr, Jul, Oct)
<br> <br>
To begin, segregate items into the categories we accept: <br><br>
<ol type = "1"> 
  <li> Water bottles </li>
  <li>Lunch boxes</li>
  <li>Empty notebooks</li>
  <li>Pens</li>
  <li>Pencils</li>
  <li>Coloured pencils</li>
  <li>Markers in working condition</li>
  <li>Mixed Stationery - Erasers, sharpeners, rulers, compass box items, etc.</li>
  <li>T-Shirts</li>
  <!--<li>Shorts</li>-->
  <!--<li>Gym tights</li>-->
  <li>Sweatshirts</li>
  <li>Sneakers</li>
  <!--<li>Raincoats</li>-->
  <li>Umbrellas</li>
  </ol> 
  
  <ul style="list-style-type:circle">
<li> Clean / Wash and discard broken / unusable items</li> 

<li> Tie shoes together in pairs, and put in individual plastic bags</li> 

<li> Sharpen pencils and bundle together with rubber bands in groups of 10, each bundle counts as 1 item</li> 

<li> Sharpen colour pencils and bundle together in groups of 10 with at least 5 different colours, each bundle counts as 1 item</li> 

<li> Bundle markers together in groups of 10 with at least 5 different colours, each bundle counts as 1 item</li> 

<li> Put mixed stationery together in a group of 5, in a zip lock bag, counts as 1 item</li> 

<li><mark style='  background-color: yellow;'>Add items to inventory in bundles of 5 for all items. Any items that are not in a bundle of 5 do not get added to the inventory.</mark></li> 

    
    </ul>
    </div>
    <?php }?>
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