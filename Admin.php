<?php

 session_start();
$serverName = "localhost";
$UserName = "root";
$Password = "";
$dbName = "test";
// connectind to database
$con=mysqli_connect( $serverName,$UserName,$Password,$dbName);





//Delete button
if (isset($_POST['delete'])) {

  $queryDelete = "Delete FROM items;";
  $results   = mysqli_query($con,$queryDelete);
}


if (isset($_POST['insert'])) {
  // code...$serverName = "localhost";


  $ID = $_POST['ID'];
  $Description = $_POST['Description'];
  $Price = $_POST['Price'];
  $Quantity = $_POST['Quantity'];
  $Sell_Price = $_POST['Sell_Price'];
  $query = "INSERT INTO items (ID, Description, Price, Quantity, Sell_Price) VALUES ('$ID','$Description','$Price',  '$Quantity','$Sell_Price');";
  mysqli_query($con, $query);
}




 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My Admin</title>

    <link rel="stylesheet" href="Sstyle.css">
  </head>
  <body>

    <div class="contianer">
      <div class="input">
        <form  action="Admin.php" method="post">
          <input type="text" name="ID" required placeholder="Item Id"><br><br>
          <input type="text" name="Description" required placeholder="Item Description"><br><br>
          <input type="text" name="Price" required placeholder="Bought Price"><br><br>
          <input type="number" name="Quantity" min="0" max="1000" required placeholder="Quantity"><br><br>
          <input type="text" name="Sell_Price" required placeholder="Item Sell Price"><br><br>
          <input type="submit" name="insert" required value="Add New Item">
          <input type="submit" name="Update" required value="Update ">
          <p></P>
          <br><br>


          <a href="logout.php"  class="btns"> Logout</a>
        </form>
        <h3>My Stock </h3>

        <div class = "table-resposnsive">
          <table class="table table-bordered">
            <tr>
              <th width="5%">Item Id</th>
              <th width="10%">Item Name</th>
              <th width="10%">Quantity</th>
              <th width="10%">Price</th>
              <th width="15%">Sell Price</th>
              <th width="5%">Action</th>
            </tr>

        <?php
        $sql= "SELECT * FROM items";
        $res= mysqli_query($con, $sql);
        if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_array($res)) {
          ?>
              <tr>
                <td align="center"><?php echo "$row[ID]";  ?></td>
                <td align="center"><?php echo "$row[Description]";  ?></td>
                <td align="center"><?php echo "$row[Quantity]";  ?></td>
                <td align="center">R<?php echo "$row[Price]";  ?></td>
                <td align="center">R<?php echo "$row[Sell_Price]";  ?></td>
                <td align="center"><input type="submit" name="delete" value="Delete"></td>


              </tr>
          <?php
      }

        }
      ?>

    </table>

      </div>


    </div>

  </body>
</html>
