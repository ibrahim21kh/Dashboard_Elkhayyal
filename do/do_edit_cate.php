<?php

include("../conn/connect.php");

$id_edit_cate = $_POST['id_cat'];
$name_cate_edit = $_POST['edit_name_cate'];
if ($name_cate_edit === "") {
    echo"please enter name of category";
    exit();
}
if (strlen(str_replace(' ','',$name_cate_edit)) < 3) {
    echo"please enter name more than 3 & Not Allowed Space for name";
    exit();
}

$update_cate = "UPDATE category SET name='$name_cate_edit' WHERE id='$id_edit_cate'";

$conn -> query($update_cate);

header("location:../Category.php");







?>