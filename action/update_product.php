<?php

$p_name = $_POST["p_name"];
$p_size = $_POST["p_size"];
$p_price = $_POST["p_price"];
$p_image = $_POST["p_image"];
$p_id = $_POST["p_id"];

include "connect.php";

$sql = "UPDATE `product` 
        SET
        `p_name`='$p_name',
        `p_size`='$p_size',
        `p_price`='$p_price',
        `p_image`='$p_image'
        WHERE p_id = '$p_id' ";

        echo $sql;

$result = mysqli_query($con, $sql);

if(!$result){
    echo "Error";
}else{
    header("location: ../manage_product.php");
    exit;
}