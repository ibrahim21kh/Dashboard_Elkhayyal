<?php

include("../conn/connect.php");

$name_cate = $_POST['name_cate'];


if ($name_cate === "") {
    echo "please enter name category";
    exit();
}
if (strlen(str_replace(' ','',$name_cate)) < 3) {
    echo"please enter the category more than 3 & Not Allowed Space";
    exit();
}


$insert_cate = "INSERT INTO category( name) VALUES ('$name_cate')";

$conn -> query($insert_cate);

header("location:../Category.php");


?>