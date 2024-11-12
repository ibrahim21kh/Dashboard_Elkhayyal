<?php

$id_cat = $_GET['id'];

$select_cat_all = "SELECT * FROM category WHERE id='$id_cat'";

$result_all_cat = $conn -> query($select_cat_all);

while ($row_all_cat = $result_all_cat -> fetch_assoc()) {
  ?>




<form action="do/do_edit_cate.php" method="POST">
  <div class="form-group">
    <label for="exampleInputPassword1">Update_Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Update_Name" name="edit_name_cate" value="<?= $row_all_cat['name']; ?>">
  </div>
  <br>
  <input type="hidden" name="id_cat" value="<?= $row_all_cat['id'] ?>">
  <br>
  <button type="submit" class="btn btn-primary">Update</button>
</form>

<?php
}
?>