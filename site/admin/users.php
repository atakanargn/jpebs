<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
	<head>
			
			<?php if($_POST){
				$l_sql=explode("_",$_POST['sprocess']);
				if($l_sql[0]==0){
				$linkSql=mysqli_query($conn,"DELETE FROM jb_users WHERE `id` = '".$l_sql[1]."'");
					header("Location:users.php");
				}
				
				if($l_sql[0]==1){
				$linkSql=mysqli_query($conn,"UPDATE jb_users SET `email` = '".$_POST['smail']."', `authority` = '".$_POST['sauth']."' WHERE `id` = '".$l_sql[1]."'");
					header("Location:users.php");
				}

			};
		?>
	<title><?php echo $siteB['title']; ?> / Management</title>
	<link rel="stylesheet" href="../style/bootstrap/theme/<?php echo $siteB['theme']; ?>.css">
	</head>
	
	<body>
		<?php include("navbar.php"); 
		if(isset($_COOKIE['jbAuth'])){
		?>
		
		<div class="jumbotron">
		<div style="margin:32px;">
		
		<table class="table table-striped table-hover ">
			<thead>
				<tr>
					<th>id</th>
					<th>Username</th>
					<th>Email</th>
					<th>Authority</th>
					<th>Process</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
		<tbody>
		<?php $sqlSt=mysqli_query($conn,"select * from jb_users order by id asc"); 
			while($sqlDt=mysqli_fetch_array($sqlSt)){
				
		?>
		<form method="POST" action="users.php" class="form-horizontal">
				<tr>
				
					<td><?php echo $sqlDt['id']; ?></td>
					
					<td><b><?php echo $sqlDt['username']; ?></b></td>
					
					<td><input type="text" class="form-control" name="smail" value="<?php echo $sqlDt['email']; ?>"></td>
					
					<td><select class="form-control" name="sauth">
							<option value="0" <?php if($sqlDt['authority']=='0'){echo 'selected';} ?>>Author</option>
							<option value="1" <?php	if($sqlDt['authority']=='1'){echo 'selected';} ?>>Administrator</option>
							<option value="2" <?php	if($sqlDt['authority']=='2'){echo 'selected';} ?>>User</option>
						</select></td>
						
					<td><select class="form-control" name="sprocess">
							<option value="2" selected>&nbsp;</option>
							<option value="0_<?php echo $sqlDt['id']; ?>">Delete</option>
							<option value="1_<?php echo $sqlDt['id']; ?>">Update</option>
						</select></td>
						
						<td><button type="submit" class="btn btn-primary">Submit</button></td>
				</tr>
		</form>
		<?php
			}
		?>
		</tbody>
		</table>

		</div>
		</div>
		
		<?php
		}else{
			header("Location:index.php");
		}
		?>
			<script src="style/bootstrap/jquery-1.10.2.min.js"></script>
			<script src="style/bootstrap/bootstrap.min.js"></script>
			<script src="style/bootstrap/bootswatch.js"></script>
	</body>
</html>