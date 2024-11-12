<form action="do/do_addpro.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Name_pro</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" name="name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Price_pro</label>
    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Price" name="price">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Quantity_pro</label>
    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="quantity" name="quantity">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Category_pro</label>
    <select class="form-control" id="exampleFormControlSelect1" name="category">
     <?php
     
     $select_all_cate = "SELECT * FROM category";
     $resulte_all_cate = $conn -> query($select_all_cate);

     while ($row_all_cate = $resulte_all_cate -> fetch_assoc()) {
        ?>



    <option value="<?= $row_all_cate['id']; ?>"><?= $row_all_cate['name']; ?></option>



    <?php
     }
     
     
     
     
     ?>
    

    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Brand_pro</label>
    <select class="form-control" id="exampleFormControlSelect1" name="brand">
      <?php
      
      $select_all_brand = "SELECT * FROM brand";
      $result_all_brand = $conn -> query($select_all_brand);

      while ($row_all_brand = $result_all_brand -> fetch_assoc()) {
        ?>

      <option value="<?= $row_all_brand['id']; ?>"><?= $row_all_brand['name']; ?></option>


    <?php
      }
      
      
      
      
      
      
      ?>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description_pro</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Image_pro</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image" multiple>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>