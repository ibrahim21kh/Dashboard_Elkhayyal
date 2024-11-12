<?php

include("../conn/connect.php");


$id_brand_new = $_POST['id_brand'];
$new_name_brand = $_POST['edit_name_brand'];
if ($new_name_brand === "") {
    echo"please enter brand ";
    exit();
}

if (strlen(str_replace(' ','',$new_name_brand)) < 3) {
    echo"please enter name of brand more than 3 & Not Allowed Space for name";
    exit();
}

$update_brand ="UPDATE brand SET name='$new_name_brand' WHERE id='$id_brand_new'";

$conn -> query($update_brand);

header("location:../Brand.php");





?>