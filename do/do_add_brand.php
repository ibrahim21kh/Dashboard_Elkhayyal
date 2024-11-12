<?php

include("../conn/connect.php");

$name_brand = $_POST['Name_Brand'];
if ($name_brand === "") {
    echo "please enter name brand";
    exit();
}
if (strlen(str_replace(' ','',$name_brand)) < 3) {
    echo"please write the brand more than 3 letters & Not Allowed Space";
    exit();
}

$insert_all_brand = "INSERT INTO brand( name) VALUES ('$name_brand')";

$conn -> query($insert_all_brand);

header("location:../Brand.php");







?>