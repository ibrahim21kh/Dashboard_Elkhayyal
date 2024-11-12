<table class="table" id="table-data">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Username</th>
      <th scope="col">password</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Created_At</th>
    
    </tr>
  </thead>
  <tbody>
    <?php
    if (isset($_POST['search'])) {
    $search1 =$conn->real_escape_string($_POST['search']);
    $select_all_user1 = "SELECT * FROM clients where username LIKE '%$search1%'";
    }else{
    $select_all_user1 = "SELECT * FROM clients";
    }
    $result_all_user1 = $conn -> query($select_all_user1);
    if($result_all_user1 -> num_rows > 0){

    
      while ($row_all_user1 = $result_all_user1 -> fetch_assoc()) {
        ?>



    <tr>
      <th scope="row"><?= $row_all_user1['id']; ?></th>
      <td><?= $row_all_user1['username']; ?></td>
      <td><?= $row_all_user1['password']; ?></td>
      <td><?= $row_all_user1['email']; ?></td>
      <td><?php
      
      $id_gender2 = $row_all_user1['gender'];

      $select_gender2 = "SELECT * FROM gender WHERE id='$id_gender2'";

      $result_gender2 = $conn -> query($select_gender2);

      while ($row_gender2 = $result_gender2 -> fetch_assoc()) {
        ?>

        <?= $row_gender2['name']; ?>

    <?php
      }   
        
      ?></td>
      <td><?= $row_all_user1['created_at']; ?></td>
    </tr>
    <?php
    }
  }
    ?>
  </tbody>
</table>

