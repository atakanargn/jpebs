<!DOCTYPE html>
<html>
	<head>
	<?php include("config.php"); ?>
	<?php include("header.php"); ?>
	</head>
	
	<body>
		<?php include("navbar.php"); ?>
		<div class="jumbotron">
		<?php
		$sqlPa=mysqli_query($conn,"select * from jb_pages where link='".$_GET['q']."'");
					while($pagB=mysqli_fetch_array($sqlPa)){
						echo '<h1>'.$pagB['name'].'</h1>';
						echo $pagB['content'];
					}
		?>
		</div>
			<script src="style/bootstrap/jquery-1.10.2.min.js"></script>
			<script src="style/bootstrap/bootstrap.min.js"></script>
			<script src="style/bootstrap/bootswatch.js"></script>
	</body>
</html>