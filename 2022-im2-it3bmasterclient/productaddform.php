<?php
  include "dbconnect.php";
?>
<form action="savetoproduct.php">

  <label for="cars">Choose a car:</label>

  <select name="cars" id="cars">
    <?php
         $sqlQuery = "SELECT * from category";
         $res = $conn->query($sqlQuery);

         while ($row =mysqli_fetch_object($res)){
          echo "<option value=\"$row->id\">$row->name</option>";
         }
     ?>
  </select>
  <br>

  <input type="text" placeholder="Enter name" name="name">
    <br>
    <input type="text" placeholder="Enter product price" name="price">
    <br>
    <input type="submit">
    
 </form>