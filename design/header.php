<?php

include('conn/connect.php');



if (!isset($_SESSION['login'])) {
	header("location:index.php");
};

?>


<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="Dashboard.php"><span>EL</span>KHAYYAL</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><?php
						$select_all_comment = "SELECT * FROM contact WHERE static=0";
						$result_all_comment = $conn -> query($select_all_comment);
						$count = $result_all_comment -> num_rows;
						if ($count > 0) {
							echo'<span class="label label-danger">'.$count.'</span>';
						}

						?>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<?php
							$select_comment = "SELECT * FROM contact ORDER BY Created_At DESC limit 2";
							$result_comment = $conn -> query($select_comment);
							while ($row_comment = $result_comment -> fetch_assoc()) {
								?>

							<li>
								<div class="dropdown-messages-box"><a href="profile.php" class="pull-left">
									</a>
									<div class="message-body"><small class="pull-right" style="font-size:16px;"><?= $row_comment['UserName'] ?></small>
										<a href="Comment.php"><?= $row_comment['Message'] ?></a>
									<br /><small class="text-muted"><?= $row_comment['Created_At'] ?></small></div>
								</div>
							</li>

							<li class="divider"></li>
							<?php
							}
							?>
							
							<li>
								<div class="all-button"><a href="Comment.php">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>