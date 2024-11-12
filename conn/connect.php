<?php
session_name('login');
session_start();

$server_name = "localhost";
$db_user = "root";
$db_pass ="";
$db_name = "markiting shop";


$conn = new mysqli($server_name , $db_user , $db_pass , $db_name);



?>