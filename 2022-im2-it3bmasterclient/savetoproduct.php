<?php

    require_once "dbconnect.php";

    $proCat = $_GET['cars'];
    $proname = $_GET['name'];
    $proprice = $_GET['price'];

    $sql = "insert into product (category , price, name) values ('$proCat', '$proprice','$proname')";
    $result = $conn->query($sql);

    if($result)
        header("Location: productdisplay.php");
    else
        echo "Failed";