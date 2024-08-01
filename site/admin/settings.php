<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
	<head>
			
			<?php if($_POST){
			$linkSql=mysqli_query($conn,"UPDATE jb_settings SET `title` = '".$_POST['stitle']."', `description` = '".$_POST['sdescription']."', `keywords` = '".$_POST['skeywords']."', `language` = '".$_POST['slang']."', `webmaster` = '".$_POST['swebmaster']."', `theme` = '".$_POST['stheme']."', `contact-mail` = '".$_POST['scmail']."' WHERE `id` = 1;");
			header("Location:settings.php");
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
		<h2 style="margin:16px;"><?php echo $siteB['title']; ?> settings page</h2>
		<?php $sqlSt=mysqli_query($conn,"select * from jb_settings where id='1'"); 
			while($sqlDt=mysqli_fetch_array($sqlSt)){
				
		?>
		
		<table class="table table-striped table-hover ">
			<thead>
				<tr>
					<th>Option</th>
					<th>Value</th>
				</tr>
			</thead>
		<form method="POST" action="settings.php" class="form-horizontal">
			<tbody>
				<tr>
					<td>Title</td>
					<td><input type="text" class="form-control" name="stitle" value="<?php echo $sqlDt['title']; ?>"></td>
				</tr>
				
				<tr>
					<td>Description</td>
					<td><textarea class="form-control" rows="2" name="sdescription"><?php echo $sqlDt['description']; ?></textarea></td>
				</tr>
				
				<tr>
					<td>Keywords</td>
					<td><textarea class="form-control" rows="2" name="skeywords"><?php echo $sqlDt['keywords']; ?></textarea></td>
				</tr>
				
				<tr>
					<td>Theme</td>
					<td><select class="form-control" name="stheme">
							<option value="default" <?php if($sqlDt['theme']=='default'){echo 'selected';} ?>>Default</option>
							<option value="cerulean" <?php	if($sqlDt['theme']=='cerulean'){echo 'selected';} ?>>Cerulean</option>
							<option value="cosmo" <?php	if($sqlDt['theme']=='cosmo'){echo 'selected';} ?>>Cosmo</option>
							<option value="cyborg" <?php	if($sqlDt['theme']=='cyborg'){echo 'selected';} ?>>Cyborg</option>
							<option value="darkly" <?php	if($sqlDt['theme']=='darkly'){echo 'selected';} ?>>Darkly</option>
							<option value="flatly" <?php	if($sqlDt['theme']=='flatly'){echo 'selected';} ?>>Flatly</option>
							<option value="journal" <?php	if($sqlDt['theme']=='journal'){echo 'selected';} ?>>Journal</option>
							<option value="lumen" <?php	if($sqlDt['theme']=='lumen'){echo 'selected';} ?>>Lumen</option>
							<option value="paper" <?php	if($sqlDt['theme']=='paper'){echo 'selected';} ?>>Paper</option>
							<option value="readable" <?php	if($sqlDt['theme']=='readable'){echo 'selected';} ?>>Readable</option>
							<option value="sandstone" <?php	if($sqlDt['theme']=='sandstone'){echo 'selected';} ?>>Sandstone</option>
							<option value="simplex" <?php	if($sqlDt['theme']=='simplex'){echo 'selected';} ?>>Simplex</option>
							<option value="slate" <?php	if($sqlDt['theme']=='slate'){echo 'selected';} ?>>Slate</option>
							<option value="spacelab" <?php	if($sqlDt['theme']=='spacelab'){echo 'selected';} ?>>Spacelab</option>
							<option value="superhero" <?php	if($sqlDt['theme']=='superhero'){echo 'selected';} ?>>Superhero</option>
							<option value="united" <?php	if($sqlDt['theme']=='united'){echo 'selected';} ?>>United</option>
							<option value="yeti" <?php	if($sqlDt['theme']=='yeti'){echo 'selected';} ?>>Yeti</option>
						</select></td>
				</tr>
				
				<tr>
					<td>Language (Example; "tr")</td>
					<td><input type="text" class="form-control" name="slang" value="<?php echo $sqlDt['language']; ?>"/></td>
				</tr>
				
				<tr>
					<td>Webmaster</td>
					<td><input type="text" class="form-control" name="swebmaster" value="<?php echo $sqlDt['webmaster']; ?>"></td>
				</tr>
				
				<tr>
					<td>Contact Mail</td>
					<td><input type="text" class="form-control" name="scmail" value="<?php echo $sqlDt['contact-mail']; ?>"></td>
				</tr>
				
				<tr>
					<td>&nbsp;</td>
					<td><button type="submit" class="btn btn-primary" style="width:100%;">Submit</button></td>
				</tr>
			</tbody>
		</form>
		</table>
		
		<?php
			}
		?>
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