<?php
include("../conn/connect.php");

$id_update = $_GET['id'];

$update_comment = "UPDATE contact SET static='1' WHERE id='$id_update'";

$conn -> query($update_comment);

header("location:../Comment.php");






?>