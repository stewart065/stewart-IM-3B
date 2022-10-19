<?php
    require_once "dbconnect.php";
?>
<style>
    table, th, td {
         border: 1px solid black;
        border-collapse: collapse;
        background: brown;
        margin: 0px auto;
        padding: 10px;
    }
</style>

<h4>list prod</h4>

<table>
    <tr>
        <th>Category name</th>
        
        <th>name</th>

        <th>price</th>

        <th>action</th>
    </tr>
    
    <?php
        $sql = "SELECT category.name as category, product.id, product.name, product.price FROM category inner JOIN product on category.id = product.category;";
        $result = $conn->query($sql);
        
        while($row = mysqli_fetch_object($result)){
            echo "<tr>";
            echo "<td>$row->category</td>";
            echo "<td>$row->name</td>";
            echo "<td>$row->price</td>";
            echo "<td><a href=\"#\">Update</a></td>";
            echo "<td><a href=\"#\">Delete</a></td>";
        }
    
    ?>

</table>
