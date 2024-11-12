<?php

include("conn/connect.php");

$id_delete_user = $_GET['id'];

$delete_user = "DELETE FROM users WHERE id='$id_delete_user'";

$conn -> query($delete_user);

header("location:Users.php");




?>