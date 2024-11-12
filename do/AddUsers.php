<form action="do/do_add_user.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username" name="username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="@gmail.com" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Number</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter number" name="number">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Gender</label>
    <select class="form-control" id="exampleFormControlSelect1" name="gender">
      <option selected disabled>choose</option>
      <?php
      $select_all_gen = "SELECT * FROM gender";
      $result_all_gen = $conn -> query($select_all_gen);
      while ($row_gen = $result_all_gen -> fetch_assoc()) {
        ?>
        <option value="<?= $row_gen['id']; ?>"><?= $row_gen['name']; ?></option>
      <?php
      }
      ?>
      
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Permission</label>
    <select class="form-control" id="exampleFormControlSelect1" name="permission">
      <option selected disabled>choose</option>
      <?php
      $select_pt = "SELECT * FROM permission";
      $result_pt = $conn -> query($select_pt);
      while ($row_pt = $result_pt -> fetch_assoc()) {
        ?>

      <option value="<?= $row_pt['id']; ?>"><?= $row_pt['name']; ?></option>

      <?php
      }
      ?>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Photo</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img">
  </div>
  <button type="submit" class="btn btn-primary">Add</button>
</form>