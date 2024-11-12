<table class="table" id="table-data">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Number</th>
      <th scope="col">Message</th>
      <th scope="col">static</th>
      <th scope="col">Controls</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if (isset($_POST['search'])) {
        $search = $conn->real_escape_string($_POST['search']);
        $select_all_user2 = "SELECT * FROM contact WHERE UserName LIKE '%$search%'";
    } else {
        $select_all_user2 = "SELECT * FROM contact ORDER BY static DESC";
    }
    $result_all_user2 = $conn->query($select_all_user2);
    if ($result_all_user2->num_rows > 0) {
        while ($row_all_user2 = $result_all_user2->fetch_assoc()) {
            $modal_id = "exampleModal" . $row_all_user2['id']; // Unique modal ID
    ?>
    
    <tr>
      <th scope="row"><?= $row_all_user2['id']; ?></th>
      <td><?= $row_all_user2['UserName']; ?></td>
      <td><?= $row_all_user2['Email']; ?></td>
      <td><?= $row_all_user2['PhoneNumber']; ?></td>
      <td><?= $row_all_user2['Message']; ?></td>
      <td>
        <!-- Button trigger modal -->
        <?php
        if ($row_all_user2['static'] == 0) {
            echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#' . $modal_id . '">
                    Un Read
                  </button>';
        } else {
            echo '<button type="button" class="btn btn-success" data-toggle="modal" data-target="#' . $modal_id . '">
                    Read
                  </button>';
        }
        ?>
      </td>
      <td><a href="Delete_Comment.php?id=<?= $row_all_user2['id'] ?>" class="btn btn-danger">Delete</a></td>
    </tr>

    <!-- Modal -->
    <div class="modal fade" data-backdrop="static" data-keyboard="false" id="<?= $modal_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">MESSAGE</h5>
          </div>
          <div class="modal-body">
            <?= $row_all_user2['Message'] ?>
          </div>
          <div class="modal-footer">
            <a href="do/edit_comment.php?id=<?= $row_all_user2['id'] ?>"><button class="btn btn-warning">CLOSE</button></a>
          </div>
        </div>
      </div>
    </div>

    <?php
        }
    }
    ?>
  </tbody>
</table>
