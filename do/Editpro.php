<?php
$id_update_pro = $_GET['id'];
$select_edit_pro = "SELECT * FROM products WHERE id ='$id_update_pro'";
$result_edit_pro = $conn -> query($select_edit_pro);

while ($row_edit_pro = $result_edit_pro -> fetch_assoc()) {
?>




<form action="do/do_editpro.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Update Name_pro</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter New Name" name="update_name" value="<?= $row_edit_pro['name_pro']; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Update Price_pro</label>
    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter New Price" name="update_price" value="<?= $row_edit_pro['price_pro'];?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Update Quantity_pro</label>
    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter New quantity" name="update_quantity"  value="<?= $row_edit_pro['quantity_pro'];?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Update Category_pro</label>
    <select class="form-control" id="exampleFormControlSelect1" name="update_category">
        <?php
        
        $select_edit_cate = "SELECT * FROM category";
        $result_edit_cate = $conn -> query($select_edit_cate);
        while ($row_edit_cate = $result_edit_cate -> fetch_assoc()) {
            ?>

            <option <?php
            if ($row_edit_cate['id'] == $row_edit_pro['category_pro']) {
                echo "selected";
            }
            
            ?> value="<?= $row_edit_cate['id']; ?>"><?= $row_edit_cate['name']; ?></option>
        
        <?php
        }      
        ?>
    
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Update Brand_pro</label>
    <select class="form-control" id="exampleFormControlSelect1" name="update_brand" >
        <?php
        $select_edit_brand = "SELECT * FROM brand";
        $result_edit_brand = $conn -> query($select_edit_brand);
        while ($row_edit_brand = $result_edit_brand -> fetch_assoc()) {
            ?>
                <option <?php
                if ($row_edit_brand['id'] == $row_edit_pro['brand_pro']) {
                     echo "selected";
                }
      
                ?> value="<?= $row_edit_brand['id']?>"><?= $row_edit_brand['name']?></option>
                  <?php
                  }
                  ?>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Update Description_pro</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="update_description"><?= $row_edit_pro['description_pro']; ?></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Update Image_pro</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="update_image" multiple>
    <img src="image/<?= $row_edit_pro['img_pro'] ?>" width="140px" height="80px">
  </div>
  <br>
  <input type="hidden" name="id" value="<?= $row_edit_pro['id']; ?>">
  <br>
  <button type="submit" class="btn btn-primary">Update</button>
</form>

<?php
}


?>