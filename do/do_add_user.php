<?php

include("../conn/connect.php");

$name_user = $_POST['username'];
if ($name_user === "") {
    echo "please enter username";
    exit();
}
if (strlen(str_replace(' ','',$name_user)) < 3) {
    echo"please enter name more than 3 & Not Allowed space for name";
    exit();
}
$pass_user = $_POST['password'];
if ($pass_user === "") {
    echo"please enter password";
    exit();
}
if (strlen(str_replace(' ','',$pass_user)) < 8) {
    echo"please enter strong password more than 8 & Not Allowed Space for password";
    exit();
}

$email_user = $_POST['email'];
if ($email_user == "") {
    echo"Please Enter Email";
}
if (substr($email_user,-10) != '@gmail.com') {
    echo"Please enter right email";
    exit();
}
if (substr_replace(' ','',$email_user)) {
    echo"Not Allowed Space for email";
    exit();
}
$number_user =$_POST['number'];
if ($number_user == "") {
    echo"Please Enter number";
    exit();
}
if (strlen(str_replace(' ','',$number_user)) < 10) {
    echo" number must be 11 number Not Allowed Space for number";
    exit();
}
$gender_user = $_POST['gender'];
if ($gender_user == "") {
    echo"Please choose gender";
    exit();
}
$pr_user = $_POST['permission'];

if ($pr_user == "") {
    echo"Please choose permission";
    exit();
}

$img_user =$_FILES['img']['name'];
if ($img_user === "") {
    echo"please choose photo";
    exit();
}
$img_temp =$_FILES['img']['tmp_name'];
$img_size = $_FILES['img']['size'];

$ex_photo = explode("." , $img_user);
$exd_photo = end($ex_photo);
$ext_photo = ["png" , "jpg" , "jpeg" , "gif" ,"jfif"];

if (!isset($exd_photo , $ext_photo)) {
    echo"Not Allowed Ext";
    exit();
}

if ($img_size > 25000000) {
    echo"Not Allowed Size";
    exit();
}

$new_name_photo = rand(0,10000).time().$img_user;
move_uploaded_file($img_temp , "../image/$new_name_photo");

$insert_user ="INSERT INTO users( username, password, Email, PhoneNumber, gender, permission, image)VALUES('$name_user','$pass_user','$email_user','$number_user','$gender_user','$pr_user','$new_name_photo')";


$conn -> query($insert_user);

header("location:../Users.php");

?>