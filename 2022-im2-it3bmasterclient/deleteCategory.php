<?php
require_once "dbconnect.php";

$catID = $_GET['id'];
$sqlQuery = "delete from category WHERE id = $catID";
$res = $conn->query($sqlQuery);
if($res){
    header("location: index.php");
}
