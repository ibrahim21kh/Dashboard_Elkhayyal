<?php


$id_edit = $_GET['id'];

$select_edit = "SELECT * FROM users WHERE id='$id_edit'";

$result_edit = $conn -> query($select_edit);

while ($row_edit = $result_edit -> fetch_assoc()) {
    ?>





<form action="do/do_edit_user.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Update_Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="New_Name" name="edit_name" value="<?= $row_edit['username'] ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Update_Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="New_Password" name="password" value="<?= $row_edit['password'] ?>">
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Update_Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="New_Email" name="edit_email" value="<?= $row_edit['Email'] ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Update_Number</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="New_Number" name="edit_number" value="<?= $row_edit['PhoneNumber'] ?>">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlFile1">Update_Photo</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="edit_photo">
    <img src="image/<?= $row_edit['image'] ?>" style="width:120px;height:80px;">
  </div>
  <br>
  <input type="hidden" name="edit_id" value="<?= $row_edit['id'] ?>">
  <br>
  
  <button type="submit" class="btn btn-primary" style="width:100%;">Update</button>

</form>

<?php
}
?>