<?php
include("../conn/connect.php");

$id_edit_pro = $_POST['id'];
$name_edit_pro = $_POST['update_name'];
if ($name_edit_pro === "") {
    echo"please enter name";
    exit();
}
if (strlen(str_replace(' ','',$name_edit_pro)) < 3) {
    echo"please enter name more than 3 & Not Allowed Space for name";
    exit();
}
$price_edit_pro = $_POST['update_price'];
if ($price_edit_pro === "") {
    echo"please enter price";
    exit();
}
if (strlen(str_replace(' ','',$price_edit_pro)) < 3) {
    echo"please enter price more than 3 & Not Allowed Space for price";
    exit();
}
$quantity_edit_pro = $_POST['update_quantity'];
if ($quantity_edit_pro === "") {
    echo"please enter quantity";
    exit();
}
if (strlen(str_replace(' ','',$quantity_edit_pro)) < 1) {
    echo"please enter quantity & Not Allowed Space for quantity";
    exit();
}
$category_edit_pro = $_POST['update_category'];
$brand_edit_pro = $_POST['update_brand'];
$description_edit_pro = $_POST['update_description'];
if ($description_edit_pro === "") {
    echo"please enter description";
    exit();
}
if (strlen(str_replace(' ','',$description_edit_pro)) < 10) {
    echo"please enter description more than 10 & Not Allowed Space for description";
    exit();
}
$img_name_edit = $_FILES['update_image']['name'];

if ($img_name_edit != "") {
    $img_temp_edit = $_FILES['update_image']['tmp_name'];
    $img_size_edit = $_FILES['update_image']['size'];
    $ext = explode(".",$img_name_edit);
    $img_edit_ext = end($ext);
    $ext_edit_type = ['jpg' , 'jpeg' , 'gif' , 'png'];
    if (!isset($img_edit_ext,$ext_edit_type)) {
        echo"Not Allowed Ext";
        exit();
    }
    if ($img_size_edit > 25000000) {
        echo"Not Allowed Size";
        exit();
    }
    $new_edit_name = rand(0,10000).time().$img_name_edit;
    move_uploaded_file($img_temp_edit,"../image/$new_edit_name");
    $update_edit_pro = "UPDATE products SET name_pro='$name_edit_pro',img_pro='$new_edit_name',price_pro='$price_edit_pro',category_pro='$category_edit_pro',brand_pro='$brand_edit_pro',quantity_pro='$quantity_edit_pro',description_pro='$description_edit_pro'WHERE id ='$id_edit_pro'";
}else{
    $update_edit_pro = "UPDATE products SET name_pro='$name_edit_pro',price_pro='$price_edit_pro',category_pro='$category_edit_pro',brand_pro='$brand_edit_pro',quantity_pro='$quantity_edit_pro',description_pro='$description_edit_pro'WHERE id ='$id_edit_pro'";
}




$conn -> query($update_edit_pro);

header("location:../Products.php");


?>














