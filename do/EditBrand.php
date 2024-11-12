<?php

$id_brand = $_GET['id'];

$select_brand_all = "SELECT * FROM brand WHERE id='$id_brand'";

$result_all_brand = $conn -> query($select_brand_all);

while ($row_all_brand = $result_all_brand -> fetch_assoc()) {
  ?>




<form action="do/do_edit_brand.php" method="POST">
  <div class="form-group">
    <label for="exampleInputPassword1">Update_Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Update_Name" name="edit_name_brand" value="<?= $row_all_brand['name']; ?>">
  </div>
  <br>
  <input type="hidden" name="id_brand" value="<?= $row_all_brand['id']; ?>">
  <br>
  <button type="submit" class="btn btn-primary">Update</button>
</form>

<?php
}
?>