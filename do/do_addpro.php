<?php
include("../conn/connect.php");

$pro_name = $_POST['name'];
if ($pro_name === "") {
    echo "please enter name product";
    exit();
}
if (strlen(str_replace(' ','',$pro_name)) < 3) {
    echo"please enter name more than 3 & Not Allowed Space for name";
    exit();
}
$pro_price = $_POST['price'];
if ($pro_price === "") {
    echo "please enter price product";
    exit();
}
if (strlen(str_replace(' ','',$pro_price)) < 3) {
    echo"please enter price more than 3 & Not Allowed Space";
    exit();
}
$pro_quantity = $_POST['quantity'];
if ($pro_quantity === "") {
    echo "please enter quantity product";
    exit();
}
if (strlen(str_replace(' ','',$pro_quantity)) < 1) {
    echo"please enter quantity";
    exit();
}
$pro_category = $_POST['category'];
$pro_brand = $_POST['brand'];
$pro_description = $_POST['description'];
if ($pro_description === "") {
    echo "please enter description product";
    exit();
}
if (strlen(str_replace(' ','',$pro_description)) < 10) {
    echo"please enter the more description";
    exit();
}

$img_name = $_FILES['image']['name'];
if ($img_name === "") {
    echo "please choose photo product";
    exit();
}
$img_temp = $_FILES['image']['tmp_name'];
$img_size = $_FILES['image']['size'];

$ext = explode('.' , $img_name);
$img_ext = end($ext);
$ext_type = ["jpg" , "jpeg" , "gif" , "png" ,"jfif"];
if (!isset($img_ext , $ext_type)) {
    echo "Not Allowed Ext";
    exit();
}
if ($img_size > 25000000) {
    echo"Not Allowed Size";
    exit();
}

$new_img_name = rand(0,10000).time().$img_name;

move_uploaded_file($img_temp , "../image/$new_img_name");

$insert_pro = "INSERT INTO products( name_pro, img_pro, price_pro, category_pro, brand_pro, quantity_pro, description_pro)VALUES('$pro_name','$new_img_name','$pro_price','$pro_category','$pro_brand','$pro_quantity','$pro_description')";

$conn -> query($insert_pro);

header("location:../Products.php");







?>