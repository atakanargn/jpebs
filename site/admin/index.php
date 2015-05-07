<!DOCTYPE html>
<html>
	<head>
	<?php include("config.php"); ?>
			<?php if($_POST){
			$logSql=mysql_query("select * from jb_users where username='".$_POST['username']."'");
			while($cheSql=mysql_fetch_array($logSql)){
				if($cheSql['username']==$_POST['username'] && $cheSql['password']==$_POST['password']){
					if($cheSql['authority']==0){setcookie("jbAuth","author");header("Location:index.php");}
					if($cheSql['authority']==1){setcookie("jbAuth","admin");header("Location:index.php");}
					if($cheSql['authority']==2){echo "<script>alert('You are an user!');</script><meta http-equiv='refresh' content='0;URL=index.php'>";}
				}
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
		<h2>Welcome to JPeBS administration panel!</h2>
		<p>
		On this page is your blog's administration panel.
		</p>
		</div>
		</div>
		
		<?php
		}else{
		?>
		
		<div class="jumbotron">
			<div style="margin:32px;">
				<form class="form-horizontal" action="index.php" method="POST">
					<fieldset>
						<legend>Administrator & Author Login</legend>
						<div class="form-group">
						<label for="inputUsername" class="col-lg-2 control-label">Username</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" id="inputUsername" name="username">
							</div>
						</div>
	
						<div class="form-group">
						<label for="inputPassword" class="col-lg-2 control-label">Password</label>
							<div class="col-lg-10">
								<input type="password" class="form-control" id="inputPassword" name="password">
							</div>
						</div>
	
						<div class="form-group">
							<div class="col-lg-10 col-lg-offset-2">
								<button type="reset" class="btn btn-default">Cancel</button>
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
		<?php
		}
		?>
			<script src="style/bootstrap/jquery-1.10.2.min.js"></script>
			<script src="style/bootstrap/bootstrap.min.js"></script>
			<script src="style/bootstrap/bootswatch.js"></script>
	</body>
</html>