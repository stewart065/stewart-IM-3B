<?php
    require_once "dbconnect.php";
    $catID = $_GET['id'];

   
    $sqlQuery = "SELECT * from category WHERE id = $catID";
    
    $res = $conn->query($sqlQuery);
    $row = $res->fetch_assoc();


    if($_POST){
        var_dump($_POST);
        $catname = $_POST['name'];
        $catstatus = $_POST['status'];

        $sqlQuery ="update  category set name = '$catname', status= '$catstatus' where id = $catID";

        $res = $conn->query($sqlQuery);
        if($res)
        header("location: index.php");

    }
?>
<link rel="stylesheet" href="updatecat.css">

<form action="" method="post">

    <input type="text" placeholder="Enter Category name" name="name" value="<?php echo $row['name'] ?>">
    <br>
    <input type="text"  name="status" placeholder="Enter category status" value="<?php echo $row['status']?>">
    <br>
   
    <input type="submit">
</form>