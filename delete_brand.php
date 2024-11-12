<?php

include("conn/connect.php");

$id_delete_brand = $_GET['id'];

$delete_brand = "DELETE FROM brand WHERE id='$id_delete_brand'";

$conn -> query($delete_brand);

header("location:Brand.php");




?>