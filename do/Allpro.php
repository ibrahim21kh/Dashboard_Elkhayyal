<table class="table" id="table-data">
  <thead>
    <tr>
      <th scope="col">Id_pro</th>
      <th scope="col">Name_pro</th>
      <th scope="col">Img_pro</th>
      <th scope="col">Quantity_pro</th>
      <th scope="col">Price_pro</th>
      <th scope="col">Category_pro</th>
      <th scope="col">Brand_pro</th>
      <th scope="col">Controls</th>
      <th scope="col">Controls</th>
    </tr>
  </thead>
  <tbody>
        <?php
        if (isset($_POST['search'])) {
          $search =$conn->real_escape_string($_POST['search']);
          $select_pro = "SELECT * FROM products where name_pro LIKE '%$search%' ";
        }else{
        $select_pro = "SELECT * FROM products";
        }
        
        $result_pro = $conn -> query($select_pro);
        if ($result_pro -> num_rows > 0) {
         
        
        
          while ($row_pro = $result_pro -> fetch_assoc()) {
          ?>

<tr>
      <th scope="row"><?= $row_pro['id']; ?></th>
      <td><?= $row_pro['name_pro']; ?></td>
      <td><img src="image/<?= $row_pro['img_pro']; ?>" width="120px" height="60px"></td>
      <td><?= $row_pro['quantity_pro']; ?></td>
      <td><?= $row_pro['price_pro']; ?></td>
      <td>
          <?php
          $id_category = $row_pro['category_pro'];
          $select_cate = "SELECT * FROM category WHERE id = $id_category"; 
          $result_cate = $conn -> query($select_cate);
          while ($row_cate = $result_cate -> fetch_assoc()) {
            ?>

            <?= $row_cate['name']; ?>

          <?php
          }       
          ?>



      </td>
      <td><?php
      $id_brand =$row_pro['brand_pro'];
      $select_brand = "SELECT * FROM brand WHERE id = $id_brand ";
      
      $result_brand = $conn -> query($select_brand);

      while ($row_brand = $result_brand -> fetch_assoc()) {
        ?>

        <?= $row_brand['name']; ?>


      <?php
      }
      
      
      ?></td>
      <td><a href="?do=edit&id=<?= $row_pro['id']; ?>" class="btn btn-success">Update</a></td>
      <td><a href="delete_pro.php?id=<?= $row_pro['id']; ?>"  class="btn btn-danger">Delete</a></td>
    </tr>
    

        <?php
        }
        
        
      }
        
        ?>


   
  </tbody>
</table>

<a href="?do=add"><button class="btn btn-primary">Add_Pro</button></a>