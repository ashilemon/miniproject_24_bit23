<?php

$p_name = $_POST["p_name"];
$p_size = $_POST["p_size"];
$p_price = $_POST["p_price"];
$p_image = $_POST["p_image"];
$p_id = $_POST["p_id"];

include "connect.php";

$sql = "INSERT INTO `product`
        (`p_name`, `p_size`, `p_price`,`p_image`, `p_id`) 
        VALUES 
        ('$p_name','$p_size','$p_price','$p_image','$p_id')";

$result = mysqli_query($con, $sql);

if(!$result){
    echo "Error";
}else{
    header("location: ../index.php");
    exit;
}