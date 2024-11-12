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
      $select_all_cat = "SELECT * FROM category where name LIKE '%$search%'";
    }else{
    $select_all_cat = "SELECT * FROM category";
    }
    $result_all_cat = $conn -> query($select_all_cat);
    if ($result_all_cat -> num_rows > 0) {
     
    
    while ($row_all_cat = $result_all_cat -> fetch_assoc()) {
        ?>

    <tr>
      <th scope="row"><?= $row_all_cat['id']; ?></th>
      <td><?= $row_all_cat['name']; ?></td>
      <td><a href="?do=edit&id=<?= $row_all_cat['id']; ?>" class="btn btn-success">Edit</a></td>
      <td><a href="delete_cate.php?id=<?= $row_all_cat['id'];?>" class="btn btn-danger">Delete</a></td>
    </tr>
    <?php
    }
  }else {
    echo "No results found.";
}
    ?>
  </tbody>
</table>

<a href="?do=add"><button class="btn btn-primary">Add_Category</button></a>