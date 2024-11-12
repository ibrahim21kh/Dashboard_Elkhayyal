<table class="table" id="table-data">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Controls</th>
      <th scope="col">Controls</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if (isset($_POST['search'])) {
      $search =$conn->real_escape_string($_POST['search']);
      $select_all_brand = "SELECT * FROM brand where name LIKE '%$search%' ";
    }else{
      $select_all_brand = "SELECT * FROM brand";
    }
    $result_all_brand = $conn -> query($select_all_brand);
    if ($result_all_brand -> num_rows > 0) {
     
    
      while ($row_all_brand = $result_all_brand -> fetch_assoc()) {
        ?>

    <tr>
      <th scope="row"><?= $row_all_brand['id']; ?></th>
      <td><?= $row_all_brand['name']; ?></td>
      <td><a href="?do=edit&id=<?= $row_all_brand['id']; ?>" class="btn btn-success">Edit</a></td>
      <td><a href="delete_brand.php?id=<?= $row_all_brand['id']; ?>" class="btn btn-danger">Delete</a></td>
    </tr>
    <?php
    }
  }
    ?>
   
  </tbody>
</table>

<a href="?do=add"><button class="btn btn-primary">Add_Brand</button></a>