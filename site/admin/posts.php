<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
	<head>
	<title><?php echo $siteB['title']; ?> / Management</title>
	<link rel="stylesheet" href="../style/bootstrap/theme/<?php echo $siteB['theme']; ?>.css">
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	</head>
	<body>
		<?php include("navbar.php"); 
		if(isset($_COOKIE['jbAuth'])){
		?>
		<div class="jumbotron">
		<div style="margin:32px;">
		<?php
		if($_GET){
			if($_GET['p']='delete'){mysqli_query($conn,"DELETE FROM jb_post WHERE `b_id` = '".$_GET['bid']."'");header("Location:posts.php");};
			if($_GET['p']='update'){
				
			};
			
		?>	
		
		<?php
		}else{
		?>
		
		<table class="table table-striped table-hover" style="table-layout: fixed;">
			<thead>
				<tr>
					<th>#</th>
					<th>Title</th>
					<th>Category</th>
					<th>Tags</th>
					<th>Status</th>
					<th>Author</th>
					<td>Process</td>
				</tr>
			</thead>
			<tbody>
			<tr>
					<td>New Post</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
			</tr>
		<?php 
		$sqlP=mysqli_query($conn,"select * from jb_post order by id asc");
		while($sqlT=mysqli_fetch_array($sqlP)){
		?>
				<tr>
					<td><?php echo $sqlT['id']?></td>
					<td><?php echo $sqlT['title']?></td>
					<td><?php echo $sqlT['category']?></td>
					<td style="word-wrap:break-word;">
					<?php $tags=explode(",",$sqlT['tags']);
					$cTags=count($tags);
					for($i=0;$i<$cTags;$i++){
						echo "<a href='../tag.php?q=".$tags[$i]."'>".$tags[$i]."</a> ";
						if($i<$cTags-1){echo "<b>,</b> ";};
					}
					?></td>
					<td><?php echo $sqlT['status']?></td>
					<td><?php echo $sqlT['author']?></td>
					<td><a href="posts.php?p=update&bid=<?php echo $sqlT['b_id']?>">UPDATE</a> | <a href="posts.php?p=delete&bid=<?php echo $sqlT['b_id']?>">DELETE</a></td>
				</tr>
		<?php
		}
		?>
		</tbody>
		</table>
		
		<?php
		}
		?>
		
		<?php
		}else{
			header("Location:index.php");
		}
		?>
		</div>
		</div>
		<script src="style/bootstrap/jquery-1.10.2.min.js"></script>
			<script src="style/bootstrap/bootstrap.min.js"></script>
			<script src="style/bootstrap/bootswatch.js"></script>
	</body>
</html>