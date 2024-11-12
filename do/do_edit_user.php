<?php

include("../conn/connect.php");

$id_edit_user = $_POST['edit_id'];

if (isset($_POST['edit_name'])) {
    $names = $_POST['edit_name'];
};

if ($names == "") {
    echo "please enter name";
    exit();
};
if (strlen(str_replace(' ','',$names)) < 3) {
    echo"please enter name more than 3 & Not Allowed Space for name";
    exit();
}


if (isset($_POST['password'])) {
    $passwords = $_POST['password'];
    if (strlen(str_replace(' ','',$passwords)) < 8 ) {
        echo "The number of password is short please write a strong password & Not Allowed Space for password";
        exit();
    }
};

if ($passwords == "") {
    echo"please enter password";
    exit();
}

if (isset($_POST['edit_email'])) {
    $emails = $_POST['edit_email'];
};
// if (str_replace(' ','',$emails)) {
//     echo"Not Allowed Space for email";
//     exit();
// }

if (substr($emails,-10) != "@gmail.com") {
    echo"Please enter right email";
    exit();
};

if (isset($_POST['edit_number'])) {
    $numbers = $_POST['edit_number'];
    if ($numbers == "") {
        echo"Please enter Number";
    }
};
if (strlen(str_replace(' ','',$numbers)) < 10) {
    echo"please enter number 11 & Not Allowed Space for number";
}

$photo_edit_user = $_FILES['edit_photo']['name'];

if ($photo_edit_user != "") {
    

$temp_edit_user = $_FILES['edit_photo']['tmp_name'];
$size_edit_user = $_FILES['edit_photo']['size'];

$explore_img = explode("." , $photo_edit_user);
$end_img = end($explore_img);
$ext_img = ["png" , "jpg" , "jpeg" , "gif" , "jfif"];

if (!isset($end_img , $ext_img)) {
    echo"Not Allowed Ext";
    exit();
}

if ($size_edit_user > 25000000) {
    echo"Not Allowed Size";
    exit();
}

$new_edit_photo = rand(0,10000).time().$photo_edit_user;

move_uploaded_file($temp_edit_user , "../image/$new_edit_photo");

$insert_edit = "UPDATE users SET username='$names',password='$passwords',Email='$emails',PhoneNumber='$numbers',image='$new_edit_photo' WHERE id='$id_edit_user'";

}else{
    $insert_edit = "UPDATE users SET username='$names',password='$passwords',Email='$emails',PhoneNumber='$numbers' WHERE id='$id_edit_user'";
}


$conn -> query($insert_edit);

header("location:../Setting.php");




?>
