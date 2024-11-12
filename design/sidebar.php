
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<?php
				$id_user = $_SESSION['login'];
				$select_all_user = "SELECT * FROM users WHERE  username='$id_user'";
				$result_all_user = $conn -> query($select_all_user);
				$row_user = $result_all_user -> fetch_assoc();
					?>
				<img src="image/<?= $row_user['image']; ?>" class="img-responsive">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?= $row_user['username'] ?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<?php
		?>
		<div class="divider"></div>
		<!-- <form role="search" method="POST">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form> -->
		<ul class="nav menu">
			<?php
			$link = $_SERVER['PHP_SELF'];
			?>
			<li
			<?php
			if ($link == "/Ecommerc/dashboardproject/dashboard.php") {
				echo "class='active'";
			}
			?>
			><a href="dashboard.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li
			<?php
			if ($link == "/Ecommerc/dashboardproject/Products.php") {
				echo "class='active'";
			}
			?>
			><a href="Products.php" ><em class="fa-brands fa-product-hunt">&nbsp;</em> Products</a></li>

			<li
			<?php
			if ($link == "/Ecommerc/dashboardproject/Category.php") {
				echo "class='active'";
			}
			?>
			><a href="Category.php" ><em class="fa-solid fa-table">&nbsp;</em> Category</a></li>
			
			<li
			<?php
			if ($link == "/Ecommerc/dashboardproject/Brand.php") {
				echo "class='active'";
			}
			?>
			><a href="Brand.php" ><em class="fa-brands fa-apple">&nbsp;</em>Brand</a></li>
			
			
			<li
			<?php
			if ($link == "/Ecommerc/dashboardproject/Users.php") {
				echo "class='active'";
			}
			?>
			><a href="Users.php" ><em class="fa-solid fa-user">&nbsp;</em>Users</a></li>

			<li
			<?php
			if ($link == "/Ecommerc/dashboardproject/Clients.php") {
				echo "class='active'";
			}
			?>
			><a href="Clients.php" ><em class="fa-solid fa-user">&nbsp;</em>Clients</a></li>

			<li
			<?php
			if ($link == "/Ecommerc/dashboardproject/Comment.php") {
				echo "class='active'";
			}
			?>
			><a href="Comment.php" ><em class="fa-solid fa-comment">&nbsp;</em>Comment</a></li>

			

			<li
			<?php
			if ($link == "/Ecommerc/dashboardproject/Setting.php") {
				echo "class='active'";
			}
			?>
			><a href="Setting.php" ><em class="fa-solid fa-gear">&nbsp;</em>Setting</a></li>


			<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div>

	


