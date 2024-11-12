<?php
$id_users = $_SESSION['login'];
$select_all_users = "SELECT * FROM users WHERE  username='$id_users'";
$result_all_users = $conn -> query($select_all_users);
$row_users = $result_all_users -> fetch_assoc();

?>



<img src="image/<?= $row_users['image'] ?>" class="img-fluid" alt="Responsive image" style="width:250px;height:250px;float:right;border-radius:50%;">

<label>Username</label>
<br>
<h1 style="border: 3px solid black; padding: 10px;display:inline-block; border-top: 3px solid red; border-right: 3px dotted blue;border-bottom: 4px double green;"><?= $row_users['username'] ?></h1>
<br>
<label>Password</label>
<br>
<p style="border: 3px solid black; padding: 10px;display:inline-block; border-top: 3px solid red; border-right: 3px dotted blue;border-bottom: 4px double green;"><?= $row_users['password'] ?></p>
<br>
<label>Number</label>
<br>
<p style="border: 3px solid black; padding: 10px;display:inline-block; border-top: 3px solid red; border-right: 3px dotted blue;border-bottom: 4px double green;"><?= $row_users['PhoneNumber'] ?></p>
<br>
<label>Email</label>
<br>
<p style="border: 3px solid black; padding: 10px;display:inline-block; border-top: 3px solid red; border-right: 3px dotted blue;border-bottom: 4px double green;"><?= $row_users['Email'] ?></p>
<br>
<label>Permission</label>
<br>
<p style="border: 3px solid black; padding: 10px;display:inline-block; border-top: 3px solid red; border-right: 3px dotted blue;border-bottom: 4px double green;"><?php
$id_pr = $row_users['permission'];
$select_alls_pr = "SELECT * FROM permission WHERE id='$id_pr'";
$result_pr = $conn -> query($select_alls_pr);
$row_pr = $result_pr -> fetch_assoc();
?><?= $row_pr['name'] ?></p>
<br>

<label>Gender</label>
<br>
<p style="border: 3px solid black; padding: 10px;display:inline-block; border-top: 3px solid red; border-right: 3px dotted blue;border-bottom: 4px double green;"><?php
$id_gen = $row_users['gender'];
$select_alls_gen = "SELECT * FROM gender WHERE id='$id_gen'";
$result_gen = $conn -> query($select_alls_gen);
$row_gen = $result_gen -> fetch_assoc();
?><?= $row_gen['name'] ?></p>
<br>
<br>
<a href="?do=edit&id=<?= $row_users['id'] ?>"><button class="btn btn-success" style="width:100%;height:40px;font-size: 20px;color:black;">Edit</button></a>
<br>
<br>
<br>
<p style="font-size: 22px;text-align: center;">&copy; CopyRight EL KHAYYAL</p>