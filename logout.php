<?php
session_name('login');
session_start();
session_unset();
session_destroy();


header("location:index.php");



?>