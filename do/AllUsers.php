<table class="table" id="table-data">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Username</th>
      <th scope="col">Image</th>
      <th scope="col">password</th>
      <th scope="col">Email</th>
      <th scope="col">Number</th>
      <th scope="col">Gender</th>
      <th scope="col">Permission</th>
      <th scope="col">Controls</th>
    
    </tr>
  </thead>
  <tbody>
    <?php
    if (isset($_POST['search'])) {
    $search =$conn->real_escape_string($_POST['search']);
    $select_all_user = "SELECT * FROM users where username LIKE '%$search%'";
    }else{
    $select_all_user = "SELECT * FROM users";
    }
    $result_all_user = $conn -> query($select_all_user);
    if($result_all_user -> num_rows > 0){

    
      while ($row_all_user = $result_all_user -> fetch_assoc()) {
        ?>



    <tr>
      <th scope="row"><?= $row_all_user['id']; ?></th>
      <td><?= $row_all_user['username']; ?></td>
      <td><img src="image/<?= $row_all_user['image']; ?>" style="width:100px;height:60px;"></td>
      <td><?= $row_all_user['password']; ?></td>
      <td><?= $row_all_user['Email']; ?></td>
      <td><?= $row_all_user['PhoneNumber'] ?></td>
      <td><?php
      
      $id_gender = $row_all_user['gender'];

      $select_gender = "SELECT * FROM gender WHERE id='$id_gender'";

      $result_gender = $conn -> query($select_gender);

      while ($row_gender = $result_gender -> fetch_assoc()) {
        ?>

        <?= $row_gender['name']; ?>

    <?php
      }   
        
      ?></td>






      <td>
      <?php
        $id_pr = $row_all_user['permission'];
        $select_pr = "SELECT * FROM permission WHERE id='$id_pr'";
        $result_pr = $conn -> query($select_pr);
        while ($row_pr = $result_pr -> fetch_assoc()) {
            ?>
            <?= $row_pr['name']; ?>
        <?php
        }
      ?>
      </td>
      <td><a href="Delete_user.php?id=<?= $row_all_user['id']; ?>"class="btn btn-danger">Delete</a></td>
    </tr>
    <?php
    }
  }
    ?>
  </tbody>
</table>

<a href="?do=add"><button class="btn btn-primary">Add_User</button></a>